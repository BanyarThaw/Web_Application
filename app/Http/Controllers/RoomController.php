<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $rooms = Room::all();
            return view('Rooms.index',compact('rooms'));
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
            $room_types = RoomType::all();

            return view('Rooms.create',compact('room_types'));
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
            'room_name'=>'required',
            'room_number'=>'required|integer',
            'room_type'=>'required',
        ]);

        $photo = "null";

        $room = new Room();

        $room->name = request()->room_name;
        $room->room_number = request()->room_number;
        $room->room_type = request()->room_type;
        $room->room_photo = $photo;
        $room->save();

        return redirect('room')->with("info","New Room created!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        if(Auth::check()) {
            return view('Rooms.show',compact('room'));
        }
        return view('Users.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()) {
            $room = Room::find($id);
            $room_types = RoomType::all();

            return view('Rooms.edit',compact('room','room_types'));
        }
        return view('Users.login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $validatedData = request()->validate([
            'room_name' => 'required',
            'room_number' => 'required',
            'room_type' => 'required',
        ]);

        if(request()->room_photo) {
            $photoName = date('YmdHis').".".request()->room_photo->getClientOriginalExtension();
            request()->room_photo->move(public_path('photos'),$photoName);
            $room = Room::find($room->id);

            $room->name = request()->room_name;
            $room->room_number = request()->room_number;
            $room->room_type = request()->room_type;
            $room->room_photo = $photoName;

            $room->save();
        }
        else {
            $room = Room::find($room->id);

            $room->name = request()->room_name;
            $room->room_number = request()->room_number;
            $room->room_type = request()->room_type;

            $room->save();
        }
        return redirect('room')->with("info","Room updated!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if(Auth::check()) {
            $room->delete();
            return redirect('room');
        }
        return view('Users.login');
    }
}
