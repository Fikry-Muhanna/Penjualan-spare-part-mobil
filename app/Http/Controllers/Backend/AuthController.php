<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;


class AuthController extends Controller
{
    public function postlogin(Request $request){
        $data = User::where('email',$request->email)->firstOrfail();
        if ($data){
            if(Hash::check($request->password,$data->password)){
                session(['ID_user'=>true]);
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