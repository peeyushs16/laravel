<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Admin extends Model
{
    use HasFactory;
    public $table = "users";

    public static function get_api_data(){

        return Http::get("https://reqres.in/api/users?page=1");

    }
}
