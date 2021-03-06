<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class ApiController extends Controller
{
    public function showSchools()
    {
        $result = DB::select('select schoolid,name from schools');
        return $result;
    }

    public function showStandards()
    {
           $result = DB::select('select standardid,name from standard');
        return $result;
    }

    public function showCatagory()
    {
        $result = DB::select('select cataid,name from catagory');
        return $result;
    }

    public function showResource()
    {
        $result = DB::select("select name,owner,catagory,standard from resources where visible = 'yes' ");
        return $result;
    }

    public function showUserinfo()
    {
        $id = Auth::id();
        $user = User::all()->first();
        $username = $user->name;
        $result = DB::select("select birthday,gender,school,signature from users where name = '$username'");
        return $result;
    }

    public function showIP()
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        return $ip;
    }

    public function showEMail()
    {
        $id = Auth::id();
        $result = DB::select("select email from users where id = $id");
        return $result;
    }

    public function showIdentification()
    {
        $id = Auth::id();
        $result = DB::select("select id,token from users where id = $id");
        return $result;
    }
}
