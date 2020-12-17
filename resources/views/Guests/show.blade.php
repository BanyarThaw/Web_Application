@extends('Guests.sub_template_index')

@section('sub_content')
    <div class="col-md-12">
      <div class="col-md-3 col-sm-3 detail_info_header">
          <h4>Guest Detail</h4>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header_mobile">
          <h4>Detail</h4>
      </div>
      <div class="header_for_small_screens">
          <h4 class="header_for_small_screens_create">Detail</h4>
      </div>
    </div>
    <br>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Date
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->created_at->format('d M Y') }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                User Name
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
               : {{ $guest->name }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                NRC
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->nrc }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Email
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->email }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Phone
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->phone }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Adult
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->adult }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                child
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->child }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Address
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->address }}
            </div>
        </div>
    </div>
    <div class="guest_input_data">
        <div class="col-md-12 col-sm-12 col-xs-12" id="guest_input_data">
            <div class="col-md-4 col-sm-4 col-xs-4">
                Room
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $guest->rooms->name }}
            </div>
        </div>
    </div>
    <div class="guest_input_data_mobile_show">
      <div class="col-xs-12">
        <div class="guest_list_mobile_header col-xs-4">
          <h3 class="header_for_small_screens_guest">Detail</h3>
        </div>
      </div>
      <h4 class="guest_input_data_header">User Name</h4>
      <p>{{ $guest->name }}</p>
      <br>
      <h4 class="guest_input_data_header">User Email</h4>
      <p>{{ $guest->email }}</p>
      <h4 class="guest_input_data_header">Phone</h4>
      <p>{{ $guest->phone }}</p>
      <h4 class="guest_input_data_header">Adult</h4>
      <p>{{ $guest->adult }}</p>
      <h4 class="guest_input_data_header">Child</h4>
      <p>{{ $guest->child }}</p>
      <h4 class="guest_input_data_header">Address</h4>
      <p>{{ $guest->address }}</p>
      <h4 class="guest_input_data_header">Room</h4>
      <p>{{ $guest->rooms->name }}</p>
    </div>
@endsection
