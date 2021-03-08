<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\UserAdmin;

class AuthController extends BaseController

{

    // localhost/projek/public/admin/auth/login
    public function getLogin()
    {
        if(session('admin_id')) return redirect('/admin/dashboard');

        return view("Backend.Auth.login");
    }

    public function postLogin(Request $request){
        $data = UserAdmin::findBy("email", $request->get("email"));
        if ($data->id){
            if(Hash::check($request->password,$data->password)){
                session()->put("admin_id", $data->id);
                return redirect('/admin/dashboard');
            } else {
                return redirect()->back()->with('message','Password salah');
            }
        } else {
            return redirect()->back()->with('message','Email salah');
        }
        
    }
    
    public function getLogout(){
        session()->forget("admin_id");
        return redirect('admin/auth/login'); // localhost/projek/public/admin/auth/login
    }

}