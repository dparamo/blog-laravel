<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	if(Request()->has('empty')){
        
            $users = [];
        
        } else {

        $users = ['1993', '1994','1995','1996','1997','1998'];

        }

        $usera = count($users);


        $userc = ceil(count($users)/2);

    	return view('users.index', ['users' => $users,'title' => 'listado de usuarios','userc' => $userc,'usera'=>$usera] );
    }


     public function create()
    {
    	return "nuevo usuario";
    }

     public function show($id)
    {
    	return view('users.show',['id'=>$id]);
    }
}


