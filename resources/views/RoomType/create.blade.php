@extends('RoomType.sub_template_create')

@section('sub_content')
    <div class="col-md-12">
        <div class="col-md-3 detail_info_header">
            <h4>RoomType</h4>
        </div>
        <div class="col-md-3 col-sm-3 detail_info_header_mobile">
            <h4>Type</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_create">Type</h4>
        </div>
    </div>
    <br>
    <form action="/roomtype" method="post" enctype="multipart/form-data" class="user_form">
        {{ csrf_field() }}
      <div id="roomtype_create">
        <div class="user_input_data">
            <div class="col-md-12 col-sm-12 col-xs-12" id="user_input_form">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    Room Name :
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="room_type_name" required>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="user_submit_button_2">
            <div class="user_submit_button_2">
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
