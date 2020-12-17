@extends('RoomType.sub_template_index')

@section('sub_content')
    <div class="col-md-12">
      <div class="col-md-3 detail_info_header">
          <h4>RoomType</h4>
      </div>
      <div class="detail_info_header_mobile2">
          <h4>Type</h4>
      </div>
    </div>
    <div class="col-md-12 roomtype_list">
        <div class="col-md-3 col-sm-3 col-xs-4 date">
            Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-8 name">
            Name
        </div>
        @foreach($room_types as $room_type)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $room_type->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                {{ $room_type->name }}
                <a href="/roomtype/{{$room_type->id}}/edit" class="anchor_check_out">Edit</a>
            </div>
        @endforeach
    </div>
    <div class="col-xs-12 user_list_mobile">
        <br><br>
        @foreach($room_types as $room_type)
          <div class="user_list_mobile_detail">
            <h4>{{ $room_type->created_at->format('d M Y') }}</h4>
              <a href="/roomtype/{{$room_type->id}}" class="room_anchor">
                  <b>{{ $room_type->name }}</b>
              </a>
              <br>
                <a href="/roomtype/{{$room_type->id}}/edit" class="anchor_check_out">[Edit]</a>
          </div>
          <br>
        @endforeach
    </div>
@endsection
