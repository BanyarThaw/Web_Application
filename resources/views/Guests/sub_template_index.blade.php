@extends('Public.main_template_guest')

@section('content')
    <h3>
        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
          <use xlink:href="{{asset('icons/bootstrap-icons.svg#people-fill')}}"/>
        </svg>
        Guests
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
            <div class="sub_menus_mobile">
              <a href="/guest">Guest List</a>
            </div>
          </div>
        </div>
    </div>
    <div class="sub_menu col-md-3 col-sm-3 ">
        <div class="sub_menus sub_menus_active">
            <a href="/guest" class="sub_menu_anchor_active">Guest List</a>
        </div>
    </div>
    <div class="detail_info col-md-8 col-sm-12 col-xs-12" id="guest_detail_info">
        @yield('sub_content')
    </div>
@endsection
