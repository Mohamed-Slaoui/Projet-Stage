<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginAdmin(Request $req){
        $username = $req->username;
        $password = $req->password;

        $data = admin::where('username',$username)
                        ->where('password',$password)
                        ->exists();

        if ($data) {
            session(['name' => $username]);
            return redirect('/dashboard');
        }
        else{
            return redirect()->route('error_show')->withErrors([
                'error' => 'Invalid username or password'
            ]);
        }
    }


    public function destroy(){
        Session::forget('name');
        return redirect('/');
    }
}
