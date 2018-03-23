<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Society\Profil\ProfilRequest;
use App\Http\Requests\Society\Profil\SocietyRequest;
use App\Model\Society\Society;
use App\Model\Society\Token;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SocietiesController extends Controller
{
    /**
     * @var Society
     */
    private $society;

    public function __construct(Society $society)
    {
        $this->middleware('admin');
        $this->society = $society;
    }

    /**
     * get all Societies
     * @return $this
     */
    public function index()
    {
        $select = ['id','society_name','society_city','society_range','society_limit','society_status'];
        $societies = Society::allSocieties($select);
        return view('admin.society.index')->with('societies',$societies);
    }

    /**
     * get view for creating new Society
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create()
    {
        return view('admin.society.create');
    }

    public function store(SocietyRequest $request)
    {
        $path = Storage::disk('uploads')->put('images/logo', $request->logo);
        // request
        $society = Society::societyStore($request,$path);

        $code = \sha1(md5(rand()));

        Token::addPdg($code,$society->id,$request->range);

        return back();
    }

    public function edit($id)
    {
        $societies = Society::findOrFail($id);
        return view('admin.society.edit')->with(['societies'=>$societies]);
    }

    public function update($id,ProfilRequest $request)
    {
        $mail = Society::where([['id','!=',$id],['email',$request->email]])->first();
        if($mail){
            return back()->withErrors(['email'=>'mail exist'])->withInput();
        }
        $name = Society::where([['id','!=',$id],['name',$request->name]])->first();
        if($name){
            return back()->withErrors(['email'=>'mail exist'])->withInput();
        }
        // logo
        $path = $request->file('logo')->store('images/brands');
        Storage::delete($this->society->findOrFail($id)->logo);
        Society::societyUpdate($request,$path,$id);
        return back();
    }

    public function destroy($id)
    {
        $society = $this->society->findOrFail($id);
        Storage::delete($society->logo);
        $society->delete();
        return redirect()->route('societies.index');
    }
}
