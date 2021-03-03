<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;


class LoginController extends Controller
{
    public function postlogin(Request $request){
        $data = User::where('email',$request->email)->firstOrfail();
        if ($data){
            if(Hash::check($request->password,$data->password)){
                session(['berhasil_login'=>true]);
                return redirect('/dashboard');
            }
        }
        return redirect('/login')->with('message','Email atau Password salah');
    }
    public function logout (Request $request){
    Auth::logout();  
    $request->session()->flush();
    return redirect('login');
}
}