@extends('Users.sub_template_index')

@section('sub_content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-3 col-sm-3 detail_info_header">
            <h4>Edit User</h4>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header_mobile">
            <h4>Edit</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_edit">Edit</h4>
        </div>
    </div>
    <br>
    <form action="/user/{{$user->id}}/edit" method="post">
        {{ csrf_field() }}
        <div class="col-md-12 col-sm-12" id="user_input_data_form">
            <div class="user_input_data">
                <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                    <div class="col-md-3 col-sm-12">
                        User Name :
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="text" name="name" value="{{ $user->name }}" id="user_input_data_detail_2" required>
                    </div>
                </div>
            </div>
            <div class="user_input_data">
                <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                    <div class="col-md-3 col-sm-12">
                        Email :
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="text" name="email" value="{{ $user->email }}" id="user_input_data_detail_2" required>
                    </div>
                </div>
            </div>
            <div class="user_input_data">
                <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                    <div class="col-md-3 col-sm-12">
                        Password :
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="password" name="password" id="user_input_data_detail_2">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="user_submit_button">
                <div class="user_submit_button">
                    <button type="submit">Update</button>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12" id="user_submit_button_mobile">
                <div>
                    <button type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection
