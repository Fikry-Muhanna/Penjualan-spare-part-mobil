<?php

namespace App\Http\Controllers\Backend\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserAdmin;


class UserController extends BaseController
{
    public function getIndex()
    {
        $useradmin = useradmin::latest();

        return view('Backend.User.index', compact('useradmin'));

    }
 
    public function getAdd()
    {
        $form_title = 'Tambah Data User';
        return view('Backend.User.form', compact('form_title'));

    }
 
    public function postSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $useradmin = useradmin::find($request->id);
        $useradmin->name = $request->get("name");
        $useradmin->email = $request->get("email");
        $useradmin->password = $request->get("password");
        $useradmin->save();
        return redirect("admin/useradmin/index")->with(["message"=>"Berhasil disimpan!","type"=>"success"]);
    }
    public function getDetail($id)
    {
        $useradmin = useradmin::find($id);
        return view("Backend.User.detail", [
            'name'=>$useradmin->name,
            'email'=>$useradmin->email,
            'password'=>$useradmin->password
        ]);
    }
    
    public function getDelete($id)
    {
        useradmin::deleteById($id);
        
        return redirect()->back()->with(["message"=>"User Berhasil dihapus!"]);
    }

    public function getEdit($id)
    {
        $useradmin = useradmin::find($id);
        $form_title = 'Edit Data User';
        return view('Backend.User.form',compact('useradmin','form_title'));
    }
 
}

