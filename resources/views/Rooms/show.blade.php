@extends('Rooms.sub_template_index')

@section('sub_content')
    <div class="col-md-12">
      <div class="col-md-3 detail_info_header">
          <h4>Room Detail</h4>
      </div>
      <div class="col-md-3 col-sm-3  detail_info_header_mobile">
          <h4>Detail</h4>
      </div>
      <div class="header_for_small_screens">
          <h4 class="header_for_small_screens_create">Detail</h4>
      </div>
      <div class="room_edit">
        <a href="/room/{{$room->id}}/edit" class="edit_form">
            <button>Edit</button>
        </a>
      </div>
    </div>
    <br>
    <div class="user_detail_info">
        <div>
            <div class="col-md-12 col-sm-12 col-xs-12" id="user_input_form">
                <div class="col-md-4 col-sm-4">
                    Room Name
                </div>
                <div class="col-md-8 col-sm-8">
                    : {{ $room->name }}
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-12 col-sm-12 col-xs-12" id="user_input_form">
                <div class="col-md-4 col-sm-4">
                    Room Number
                </div>
                <div class="col-md-8 col-sm-4">
                    : {{ $room->room_number }}
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-12 col-sm-12 col-xs-12" id="user_input_form">
                <div class="col-md-4 col-sm-4">
                    Room Type
                </div>
                <div class="col-md-8 col-sm-8">
                    : {{ $room->room_types->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="user_input_data_mobile">
      <br><br>
      <h4 class="user_input_data_header">Room Name</h4>
      <p>{{ $room->name }}</p>
      <br>
      <h4 class="user_input_data_header">Room Number</h4>
      <p>{{ $room->room_number }}</p>
      <br>
      <h4 class="user_input_data_header">Room Type</h4>
      <p>{{ $room->room_types->name }}</p>
    </div>
@endsection
