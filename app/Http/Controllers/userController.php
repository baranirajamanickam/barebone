<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class userController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','asc')->paginate(5);
        return view('index', compact('users'));
    }


    public function show(){
        $users = User::all('id','name','email','created_at');
        $result = json_encode($users);
        return $result;
    }
}
