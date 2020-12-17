@extends('Public.main_template_reception')

@section('content')
    @if(session('info'))
        <h3>{{ session('info') }}</h3>
    @endif
    <h3>
        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
          <use xlink:href="{{asset('icons/bootstrap-icons.svg#shop')}}"/>
        </svg>
        Reception
    </h3>
    <div class="menu_icon">
      <svg class="bi" width="2.3em" height="2.3em" fill="black" color="black">
        <use xlink:href="{{asset('icons/bootstrap-icons.svg#card-list')}}"/>
      </svg>
    </div>
    <div class="wrap_sub_menu_mobile">
        <div class="arrow_wrap_mobile"></div>
        <div class="sub_menu_mobile">
          <div>
            <div class="sub_menus_mobile" >
              <a href="/reception/create">Create</a>
            </div>
            <div class="sub_menus_mobile">
              <a href="/reception/check_in">Check In</a>
            </div>
            <div class="sub_menus_mobile">
              <a href="/reception/check_out">Check Out</a>
            </div>
          </div>
        </div>
    </div>
    <div class="sub_menu col-md-3 col-sm-3 col-xs-3">
        <div class="sub_menus">
                <a href="/reception/create" class="sub_menu_anchor">Create Check-in</a>
        </div>
        <div class="sub_menus">
            <a href="/reception/check_in" class="sub_menu_anchor">Check-in List</a>
        </div>
        <div class="sub_menus sub_menus_active">
            <a href="/reception/check_out" class="sub_menu_anchor_active">Check-out List</a>
        </div>
    </div>
    <div class="detail_info col-md-8 col-sm-12 col-xs-12">
        @yield('sub_content')
    </div>
@endsection
