<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show($id = null)
    {
        if($id){
            $users = \App\Models\User::find($id);
        }
        else{
            $users = \App\Models\User::all();
        }
        return response($users, 200, [
            'Content-type' => 'application/json'
        ]);

        dd($users);
    }
    
    public function create(Request $request){
        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->date_nasc = $request->date_nasc;
        $user->phone = $request->phone;
        $user->save();
        return response($user,201,[
            'Content-type' => 'application/json'
        ]);
    }


}