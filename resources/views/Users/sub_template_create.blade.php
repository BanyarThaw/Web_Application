@extends('Public.main_template_user')

@section('content')
    @if(count($errors))
        @foreach($errors->all() as $error)
          <h3>{{ $error }}</h3>
        @endforeach
    @endif
    @if(session('info'))
        <h3>{{ session('info') }}</h3>
    @endif
    <h3>
        <svg class="bi" width="1.3em" height="1.3em" fill="black" color="black">
          <use xlink:href="{{asset('icons/bootstrap-icons.svg#person-circle')}}"/>
        </svg>
        Users
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
              <a href="/user">List</a>
            </div>
            <div class="sub_menus_mobile">
              <a href="/user/create">Create</a>
            </div>
          </div>
        </div>
    </div>
    <div class="sub_menu col-md-3 col-sm-3">
        <div class="sub_menus">
                <a href="/user" class="sub_menu_anchor">User List</a>
        </div>
        <div class="sub_menus sub_menus_active">
            <a href="/user/create" class="sub_menu_anchor_active">Create User</a>
        </div>
    </div>
    <div class="sub_menu_create_page col-md-3 col-sm-3">
        <div class="sub_menus">
                <a href="/user" class="sub_menu_anchor">User List</a>
        </div>
        <div class="sub_menus sub_menus_active">
            <a href="/user/create" class="sub_menu_anchor_active">Create User</a>
        </div>
    </div>
    <div class="detail_info col-md-8 col-sm-8">
        @yield('sub_content')
    </div>
@endsection
