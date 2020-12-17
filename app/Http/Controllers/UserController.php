<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $users = User::orderBy('created_at','desc')->get();
            return view('Users.index',compact('users'));
        }
        return view('Users.login');
    }

    public function LoginForm()
    {
        return view('Users.login');
    }

    public function login()
    {
        $input = request()->all();

        if(Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password']
        ])) {
            $user = Auth::user();
            return redirect('user');
        } else {
            return redirect('user/login')->with("info","Login Failed.Try Again!!!");
        }
    }

    public function show($id)
    {
        if(Auth::check()) {
            $user = User::find($id);

            return view('Users.show',compact('user'));
        }
        return view('Users.login');
    }

    public function create_form()
    {
        if(Auth::check()) {
            return view('Users.create_form');
        }
        return view('Users.login');
    }

    public function create()
    {
        $validatedData = request()->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
            "password_again" => "same:password",
        ]);

        $user = new User();

        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = Hash::make(request()->password);
        $user->save();

        return redirect('user')->with("info","New user created!!!");
    }

    public function edit($id) {
        if(Auth::check()) {
            $user = User::find($id);

            return view('Users.edit_form',compact('user'));
        }
        return view('Users.login');
    }

    public function update($id) {
        $validatedData = request()->validate([
            "name" => "required",
            "email" => "required|email",
        ]);

        if(request()->password) {
            $user = User::find($id);

            $user->name = request()->name;
            $user->email = request()->email;
            $user->password = Hash::make(request()->password);
            $user->save();
        }
        else {
            $user = User::find($id);

            $user->name = request()->name;
            $user->email = request()->email;
            $user->save();
        }
        return redirect('user')->with("info","User updated!!!");

    }

    public function logout() {
        Auth::logout();
        return redirect('user/login');
    }

    public function delete($user_id) {
        if(Auth::user()->id == $user_id) {
            return redirect('user')->with("info","You are not allowed to delete yourself!!!");
        }

        $user = User::find($user_id);
        $user->delete();
        return redirect('user')->with("info","User deleted!!!");
    }

    public function search() {
        if(Auth::check()) {
            $search = request()->search;

            $search_results = User::where('name','LIKE','%'.$search.'%')->get();
            $search_results_2 = User::where('email','LIKE','%'.$search.'%')->get();
            return view('Users.search',compact('search_results','search_results_2'));
        }
        return view('Users.login');
    }
}
