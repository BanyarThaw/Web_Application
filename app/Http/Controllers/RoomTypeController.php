<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $room_types = RoomType::all();
            return view('RoomType.index',compact('room_types'));
        }
        return view('Users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()) {
            return view('RoomType.create');
        }
        return view('Users.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'room_type_name' => 'required'
        ]);

        $room_type = new RoomType();

        $room_type->name = request()->room_type_name;
        $room_type->save();

        return redirect('roomtype')->with("info","New Rom type created!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        if(Auth::check()) {
            return redirect('roomtype');
        }
        return view('Users.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()) {
            $room_type = RoomType::find($id);

            return view('RoomType.edit',compact('room_type'));
        }
        return view('Users.login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomtype)
    {
        $validatedData = request()->validate([
            'room_type_name' => 'required',
        ]);

        $room_type = RoomType::find($roomtype->id);

        $room_type->name = request()->room_type_name;
        $room_type->save();

        return redirect('roomtype')->with("info","Room type updated!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomtype)
    {
        if(Auth::check()) {
            $roomtype->delete();
            return redirect('roomtype');
        }
        return view('Users.login');
    }
}
