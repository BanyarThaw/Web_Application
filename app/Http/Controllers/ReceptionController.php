<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\MessageBag;

class ReceptionController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $rooms = Room::all();
            $guests = Guest::all();
            return view('Reception.index',compact('rooms','guests'));
        }
        return view('Users.login');
    }

    public function create()
    {
        if(Auth::check()) {
            $rooms = Room::all();
            return view('Reception.create',compact('rooms'));
        }
        return view('Users.login');
    }

    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'guest_name' => 'required',
            'nrc' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'adult' => 'required',
            'child' => 'required',
            'address' => 'required',
            'room' => 'required',
        ]);

        $guest = new Guest();

        $guest->name = request()->guest_name;
        $guest->nrc = request()->nrc;
        $guest->email = request()->email;
        $guest->phone = request()->phone;
        $guest->adult = request()->adult;
        $guest->child = request()->child;
        $guest->address = request()->address;
        $guest->room = request()->room;
        $guest->status = 1;
        $guest->save();

        return redirect('reception/check_in')->with("info","New guest created!!!");
    }

    public function check_in()
    {
        if(Auth::check()) {
            $guests = Guest::where('status','1')->orderBy('created_at','desc')->paginate(10);
            return view('Reception.check_in',compact('guests'));
        }
        return view('Users.login');
    }

    public function check_in_search()
    {
        if(Auth::check()) {
            $search = $_GET['search'];

            $search_results = Guest::where('name','LIKE','%'.$search.'%')->orderBy('created_at','desc')->get();
            return view('Reception.check_in_search',compact('search_results'));
        }
        return view('Users.login');
    }

    public function check_out()
    {
        if(Auth::check()) {
            $guests = Guest::where('status','0')->orderBy('created_at','desc')->paginate(10);
            return view('Reception.check_out',compact('guests'));
        }
        return view('Users.login');
    }

    public function check_out_search()
    {
        if(Auth::check()) {
            $search = $_GET['search'];

            $search_results = Guest::where('name','LIKE','%'.$search.'%')->orderBy('created_at','desc')->get();
            return view('Reception.check_out_search',compact('search_results'));
        }
        return view('Users.login');
    }

    public function make_check_out($id)
    {
        $page= $_GET['page_number'];
        $guest = Guest::find($id);

        $guest->status = 0;

        $guest->save();
        return redirect("reception/check_in?page=".$page)->with("info","Guest check-outed!!!");
    }
}
