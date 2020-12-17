@extends('Rooms.sub_template_index')

@section('sub_content')
    <div class="col-md-12">
        <div class="col-md-3 detail_info_header">
            <h4>Room List</h4>
        </div>
        <div class="col-md-3 col-sm-3  detail_info_header_mobile">
            <h4>List</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_create">List</h4>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 room_list">
        <div class="col-md-3 col-sm-3 col-xs-4 date">
            Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-8 name">
            Name
        </div>
        @foreach($rooms as $room)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $room->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                <a href="/room/{{ $room->id }}" class="room_anchor">{{ $room->name }}</a>
                <a href="/room/{{$room->id}}/edit" class="anchor_check_out">Edit</a>
            </div>
        @endforeach
    </div>
    <div class="col-xs-12 user_list_mobile">
        <br><br>
        @foreach($rooms as $room)
          <div class="user_list_mobile_detail">
            <h4>{{ $room->created_at->format('d M Y') }}</h4>
              <a href="/room/{{$room->id}}" class="room_anchor">
                  <b>{{ $room->name }}</b>
              </a>
              <br>
                <a href="/room/{{$room->id}}/edit" class="anchor_check_out">[Edit]</a>
          </div>
          <br>
        @endforeach
    </div>
@endsection
