<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.users',['users'=>$data]);
        
    }
}
