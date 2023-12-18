<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index_admin(){

        return view('/admin/index');
    }
   
    public function list_user(){
        $listuser = DB::table('users')->select('*');
        $listuser = $listuser  ->get();
        // return response()->json($user);
        return view('/admin/list-user',['listuser'=>$listuser]);
    }
 
}
