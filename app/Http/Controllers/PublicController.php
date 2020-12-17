<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() 
    {
        return view('template');
    }

    public function check_in() 
    {
        return view('check_in');
    }

    public function check_out() 
    {
        return view('check_out');
    }

    public function guest() 
    {
        return view('guest');
    }

    public function guest_detail() 
    {
        return view('guest_detail');
    }

    public function user_create() 
    {
        return view('user_create');
    }

    public function user_list() 
    {
        return view('user_list');
    }

    public function user_edit() 
    {
        return view('user_edit');
    }
    public function user_detail()
    {
        return view('user_detail');
    }
    public function testing()
    {
        return view('testing');
    }
    public function room()
    {
        return view('room');
    }
    public function room_create()
    {
        return view('room_create');
    }
    public function room_detail()
    {
        return view('room_detail');
    }
    public function room_edit()
    {
        return view('room_edit');
    }
    public function roomtype()
    {
        return view('roomtype');
    }
    public function roomtype_create()
    {
        return view('roomtype_create');
    }
    public function roomtype_edit()
    {
        return view('roomtype_edit');
    }
}
