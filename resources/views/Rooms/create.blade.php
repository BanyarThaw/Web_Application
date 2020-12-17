@extends('Rooms.sub_template_create')

@section('sub_content')
    <div class="col-md-12">
        <div class="col-md-3 detail_info_header">
            <h4>Create Room</h4>
        </div>
        <div class="col-md-3 col-sm-3 detail_info_header_mobile">
            <h4>Create</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_create">Create</h4>
        </div>
    </div>
    <br>
    <form action="/room" method="post" enctype="multipart/form-data" class="user_form">
        {{ csrf_field() }}
      <div class="room_input_data_form col-md-12 col-sm-12 col-xs-12">
        <div class="user_input_data">
            <div class="col-md-12" id="user_input_form">
                <div class="col-md-4 room_name">
                    Room Name :
                </div>
                <div class="room_name_mobile">
                  Name
                </div>
                <div class="col-md-8">
                    <input type="text" name="room_name">
                </div>
            </div>
        </div>
        <div class="user_input_data">
            <div class="col-md-12" id="user_input_form">
                <div class="col-md-4 room_number">
                    Room Number :
                </div>
                <div class="room_number_mobile">
                  Number
                </div>
                <div class="col-md-8">
                    <input type="number" name="room_number" placeholder="number only">
                </div>
            </div>
        </div>
        <div class="user_input_data">
            <div class="col-md-12" id="user_input_form">
                <div class="col-md-4 room_type_name">
                    Room Type :
                </div>
                <div class="room_type_mobile">
                  Type
                </div>
                <div class="col-md-8">
                    <select name="room_type" id="room_type">
                        @foreach($room_types as $room_type)
                            <option value="{{ $room_type->id }}">{{ $room_type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="user_submit_button">
            <div class="user_submit_button">
                <button type="submit">Create</button>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" id="user_submit_button_mobile">
            <div>
                <button type="submit">Create</button>
            </div>
        </div>
      </div>
    </form>
@endsection
