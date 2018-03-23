<?php

namespace App\Http\Controllers\Admin;

use App\Model\Society\Society;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * @var Society
     */
    private $user;

    public function __construct(User $user)
    {
        $this->middleware('admin');
        $this->user = $user;
    }

    /**
     * get all Societies
     * @return $this
     */
    public function index()
    {
        $users = $this->user->liste();
        return view('admin.user.index')->with('users',$users);
    }

    public function destroy(int $id)
    {
        // supprimé ce membre
        // suprimé le depuis la table post
        User::UserDelete($id);
        $post = User::hasPost($id);
        if($post){
            User::UserPostDelete($id);
        }
        return back();
    }
}
