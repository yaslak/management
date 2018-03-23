<?php

namespace App\Http\Controllers\Society\Profil;

use App\Model\Society\Society;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{

    private $society;
    /**
     * @param Society $society
     */
    public function __construct(Society $society)
    {
        $this->society = $society;
    }
    public function index()
    {
        echo 'profil society';
    }



    /**
     * get society of this id
     * Society info
     * posts and his users
     * @param $id
     * @return $this
     */

    public function show(int $id)
    {
        $society = Society::society($id);
        return view('society.profil.profil')->with(['society'=>$society]);
    }

    public function edit($id)
    {
        $societies = $this->society->findOrFail($id);
        return view('admin.society.edit')->with('societies',$societies);
    }

    public function update($id,Request $request)
    {

    }

    public function delete($id)
    {

    }

}
