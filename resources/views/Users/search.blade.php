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
        @foreach($search_results as $search_result)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $search_result->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                @if(Auth::user()->id == $search_result->id)
                    <b>
                        <a href="/user/{{$search_result->id}}" class="current_user_detail_anchor">
                            {{ $search_result->name }}
                        </a>
                    </b>
                @else
                    <a href="/user/{{$search_result->id}}" class="user_detail_anchor">
                        {{ $search_result->name }}
                    </a>
                @endif
                <a href="/user/{{ $search_result->id }}/delete" class="anchor_check_out_2">
                    <svg class="bi" width="1em" height="1em" fill="black" color="black">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                    </svg>
                </a>
                <a href="/user/{{ $search_result->id }}/edit" class="anchor_check_out">
                  <svg class="bi" width="1em" height="1em" fill="black" color="black">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#pencil-square')}}"/>
                  </svg>
                </a>
            </div>
        @endforeach
        @foreach($search_results_2 as $search_result_2)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $search_result_2->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                @if(Auth::user()->id == $search_result_2->id)
                    <b>
                        <a href="/user/{{$search_result_2->id}}" class="current_user_detail_anchor">
                            {{ $search_result_2->email }}
                        </a>
                    </b>
                @else
                    <a href="/user/{{$search_result_2->id}}" class="user_detail_anchor">
                        {{ $search_result_2->email }}
                    </a>
                @endif
                <a href="/user/{{ $search_result_2->id }}/delete" class="anchor_check_out_2">
                    <svg class="bi" width="1em" height="1em" fill="black" color="black">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                    </svg>
                </a>
                <a href="/user/{{ $search_result_2->id }}/edit" class="anchor_check_out">
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
        @foreach($search_results as $search_result)
          <div class="user_list_mobile_detail">
            <h4>{{ $search_result->created_at->format('d M Y') }}</h4>
            @if(Auth::user()->id == $search_result->id)
              <a href="/user/{{$search_result->id}}" class="current_user_detail_anchor">
                  <b>{{ $search_result->name }}</b>
              </a>
            @else
                <a href="/user/{{$search_result->id}}" class="user_detail_anchor">
                    <b>{{ $search_result->name }}</b>
                </a>
            @endif
              <br>
              <a href="/user/{{ $search_result->id }}/delete">
                  <svg class="bi" width="1em" height="1em" fill="black" color="black">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                  </svg>
              </a>
              <a href="/user/{{ $search_result->id }}/edit">
                <svg class="bi" width="1em" height="1em" fill="black" color="black">
                  <use xlink:href="{{asset('icons/bootstrap-icons.svg#pencil-square')}}"/>
                </svg>
              </a>
          </div>
        @endforeach
        @foreach($search_results_2 as $search_result_2)
          <div class="user_list_mobile_detail">
            <h4>{{ $search_result_2->created_at->format('d M Y') }}</h4>
            @if(Auth::user()->id == $search_result_2->id)
              <a href="/user/{{$search_result_2->id}}" class="current_user_detail_anchor">
                  <b>{{ $search_result_2->name }}</b>
              </a>
            @else
                <a href="/user/{{$search_result_2->id}}" class="user_detail_anchor">
                    <b>{{ $search_result_2->email }}</b>
                </a>
            @endif
              <br>
              <a href="/user/{{ $search_result_2->id }}/delete">
                  <svg class="bi" width="1em" height="1em" fill="black" color="black">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#trash-fill')}}"/>
                  </svg>
              </a>
              <a href="/user/{{ $search_result_2->id }}/edit">
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
            <input type="text" name="search" placeholder="Search Name">
        </form>
    </div>
@endsection
