<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function userlogin(request $req){


        // return $req->input();
        $data = $req->input('username');

        $req->session()->put('user', $data);

        // echo session('user');
        return redirect('profile');

    }
}
