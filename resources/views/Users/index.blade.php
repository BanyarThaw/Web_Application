@extends('Users.sub_template_index')

@section('sub_content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header">
            <h4>User List</h4>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header_mobile">
            <h4>List</h4>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 user_list_table_desktop">
        <div class="col-md-3 col-sm-3 col-xs-4 date">
            Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-8 name">
            Name
        </div>
        @foreach($users as $user)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $user->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                @if(Auth::user()->id == $user->id)
                    <b>
                        <a href="/user/{{$user->id}}" class="current_user_detail_anchor">
                            {{ $user->name }}
                        </a>
                    </b>
                @else
                    <a href="/user/{{$user->id}}" class="user_detail_anchor">
                        {{ $user->name }}
                    </a>
                @endif
                <a href="/user/{{ $user->id }}/delete" class="anchor_check_out_2">
                    <svg class="bi" width="1em" height="1em" fill="black" color="black">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                    </svg>
                </a>
                <a href="/user/{{ $user->id }}/edit" class="anchor_check_out">
                  <svg class="bi" width="1em" height="1em" fill="black" color="black">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#pencil-square')}}"/>
                  </svg>
                </a>
            </div>
        @endforeach
    </div>
    <div class="col-xs-12 user_list_mobile">
        <br><br>
        <div class="col-xs-12">
          <div class="user_list_mobile_header col-xs-4">
            <h3 class="header_for_small_screens_list">List</h3>
          </div>
        </div>
        @foreach($users as $user)
          <div class="user_list_mobile_detail">
            <h4>{{ $user->created_at->format('d M Y') }}</h4>
            @if(Auth::user()->id == $user->id)
              <a href="/user/{{$user->id}}" class="current_user_detail_anchor">
                  <b>{{ $user->name }}</b>
              </a>
            @else
                <a href="/user/{{$user->id}}" class="user_detail_anchor">
                    <b>{{ $user->name }}</b>
                </a>
            @endif
              <br>
              <a href="/user/{{ $user->id }}/delete">
                  <svg class="bi" width="1em" height="1em" fill="black" color="black">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                  </svg>
              </a>
              <a href="/user/{{ $user->id }}/edit">
                <svg class="bi" width="1em" height="1em" fill="black" color="black">
                  <use xlink:href="{{asset('icons/bootstrap-icons.svg#pencil-square')}}"/>
                </svg>
              </a>
          </div>
        @endforeach
    </div>
    <div class="user_search_form">
        <form action="/user/search" method="post">
            {{ csrf_field() }}
            <input type="text" name="search" placeholder="Search Name" id="user_search_form_mobile">
        </form>
    </div>
@endsection
