<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }
    public function update(Request $request){
        //get variable

        $user = \Auth::user();
        $id = \Auth::user()->id;

        //validation rules
        $validate = $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        //getting values
        $name = $request->input('name');
        $surname = $request->input('surname');
        $username = $request->input('username');
        $email = $request->input('email');
        //new values user
        $user->name = $name;
        $user->surname = $surname;
        $user->username = $username;
        $user->email= $email;
        //run query in the database
        $user->update();
        return redirect()->route('config')
                        ->whit(['message'=>'Usuario Actualizado Correctamente']);
    }
}
