<?php

namespace App\Http\Controllers\Membre;

use App\Http\Requests\Users\UserProfilRequest;
use App\Model\Auth\Password\Old_password;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }

    public function index($slug,User $appUser)
    {
        $profil = $appUser->where('slug',$slug)->first();
        if($profil){
            $user = Auth::user();
            if($user->slug === $slug){
                $user['update'] = true;
            }
            return view('profil.membreProfil',compact('user'));
        }
        return abort(404);
    }

    public function update(UserProfilRequest $request,$slug,User $appUser,Old_password $old_password)
    {
        if($request->first_name){
            return $this->updateInfo($request,$slug,$appUser);
        }elseif ($request->email){
            return $this->updateAccount($request,$slug,$appUser,$old_password);
        }
        return $this->index($slug,$appUser);
    }

    private function updateInfo($request,$slug,$appUser)
    {
        $this->authorize('update',$appUser->where('id',Auth::user()->id)->first());

        $appUser->where('id',Auth::user()->id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'dtn' => $request->dtn,
            'sex'=>$request->sex,
            'address'=>$request->address,
            'house_nbr'=>$request->house_nbr,
            'city'=>$request->city,
            'tel'=>$request->tel
        ]);
        return redirect(route('profil.show',['slug'=>$slug]));
    }

    private function updateAccount($request,$slug,$user,$old_password)
    {
        $this->authorize('update',$user->where('id',Auth::user()->id)->first());
        if($request->name){
            $user->where('id',Auth::user()->id)->update([
                'name'=>$request->name
            ]);
        }
        if($request->email){
            if(Auth::user()->email != $request->email){
                $user->where('id',Auth::user()->id)->first()->recover()->update([
                    'email' => false,
                    'token' => rand()
                ]);
                $user->where('id',Auth::user()->id)->update([
                    'email'=>$request->email
                ]);
            }
        }
        if($request->password){
            if($request->password_current){
                $old_password->insert([
                    'recover_id'=>$user->where('id',Auth::user()->id)->first()->recover_id,
                    'password'=> Auth::user()->password,
                    'created_at'=> Carbon::now()
                ]);
                $user->where('id',Auth::user()->id)->update(['password'=>bcrypt($request->password)]);
            }
            return back()->withErrors(['password'=>trans('validation.required',['attribute'=>trans('validation.attributes.password')])])->withInput();
        }
        return redirect(route('profil.show',['slug'=>$slug]));
    }
}
