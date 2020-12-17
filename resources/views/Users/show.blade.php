@extends('Users.sub_template_index')

@section('sub_content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header">
            <h4>Detail Info</h4>
        </div>
        <div style="position: relative;">
          <div class="user_edit">
              <a href="/user/{{ $user->id }}/edit">
                  <button>Edit</button>
              </a>
          </div>
        </div>
    </div>
    <br><br>
    <div class="user_input_data_show">
        <div class="col-md-12 col-sm-12 col-xs-12" id="user_name_password">
            <div class="col-md-4 col-sm-4 col-xs-3">
                User Name
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $user->name }}
            </div>
        </div>
    </div>
    <div class="user_input_data_show">
        <div class="col-md-12 col-sm-12 col-xs-12" id="user_name_password">
            <div class="col-md-4 col-sm-4 col-xs-3">
                Email
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                : {{ $user->email }}
            </div>
        </div>
    </div>
    <div class="user_input_data_mobile">
      <h4 class="user_input_data_header">User Name</h4>
      <p>{{ $user->name }}</p>
      <br>
      <h4 class="user_input_data_header">User Email</h4>
      <p>{{ $user->email }}</p>
    </div>
@endsection
