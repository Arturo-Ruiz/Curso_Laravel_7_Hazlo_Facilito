<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        return 'UserID ' . $id;
    }
    public function saluda(){
        //retornar datos a la vista
    return view('users', ['name'=>'Henry Y Moi']);
    // return view('users')->with('name', 'Ignacio');
    }
}
