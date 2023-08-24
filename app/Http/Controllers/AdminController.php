<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller{


    function showadmin(){


        $data['names'] = ["peeyush", "vishal", "pardeep"];
        $data['age'] = 30;
        $data['subject'] = 'Laravels';
        return view("admin", $data);
    }

    function getdata(){
        
        print_r($_POST);
        return view("users");
    }

    function getuser(){
        
        return DB::select("select * from users");
    }
    
    function getmodeluser(){
        
        return Admin::all();
    }
    
    function fetch_apidata(){
        
        $data = Admin::get_api_data();

        return view('api_data', ['collection' => $data['data']]);
    }
    
    function method_post(Request $req){
        return $req;
    }
    
    function method_put(Request $req){
        return $req;
    }
    
    function method_delete(Request $req){
        return $req;
    }
    
    function method_get(Request $req){
        return $req;
    }
    
    function method_use(Request $req){

        return $req;
    }

    
    function session_flash(Request $req){

        $data = $req->input('username');
        $req->session()->flash('user', $data);
        return redirect('session_flase');
    }
}
