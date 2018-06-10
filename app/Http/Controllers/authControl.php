<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class authControl extends Controller
{
    public function login(Request $request){
        $mst = $request['mst'];
        $password = $request['password'];
        if(Auth::attempt(['mst' => $mst, 'password' => $password])){
            session()->put('mst', $mst);
            return redirect('dashboard');
        } else return redirect()->back();
    }

    public function logout(){
        session()->flush();
        return redirect()->back();
    }
}
