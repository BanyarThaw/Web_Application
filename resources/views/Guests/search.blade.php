@extends('Guests.sub_template_index')

@section('sub_content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-3 col-sm-3 detail_info_header">
            <h4>Guest List</h4>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header_mobile">
            <h4>List</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_create">List</h4>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 guest_list">
        <div class="col-md-3 col-sm-3 col-xs-5 date">
            Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-7 name">
            Name
        </div>
        @foreach($search_results as $search_result)
            <div class="col-md-3 col-sm-3 col-xs-5 date">
                {{ $search_result->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-7 name">
                <a href="/guest/{{ $search_result->id }}" class="guest_detail_anchor">
                    {{ $search_result->name }}
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
              <a href="/guest/{{$search_result->id}}" class="user_detail_anchor">
                  <b>{{ $search_result->name }}</b>
              </a>
              <br><br>
          </div>
        @endforeach
    </div>
    <div class="guest_search_form">
        <form action="/search" method="GET">
            <input type="text" name="search" placeholder="Search Name">
        </form>
    </div>
@endsection
