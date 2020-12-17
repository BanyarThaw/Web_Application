<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
    <link rel="stylesheet" href="{{asset('css/room.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="icon" type="image/png" href="{{asset('photos/logo.jpg')}}" />
</head>
<body>
    <div class="wrap container">
      <div class="header">
          <h3>Web Application</h2>
          <div class="wrap_logout">
              <div class="logout">
                  <svg class="show bi" width="2em" height="2em" fill="#b0b618" color="#b0b618">
                    <use xlink:href="{{asset('icons/bootstrap-icons.svg#person-circle')}}"/>
                  </svg>
                  &nbsp;&nbsp;
                  <a href="/user/logout" title="logout">
                    <svg class="power bi" width="2em" height="2em" fill="#b0b618" color="#b0b618">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#power')}}"/>
                    </svg>
                  </a>
                  <div class="user_info">
                    <div class="arrow_wrap_header">
                        <div class="arrow_one_header"></div>
                        <div class="arrow_two_header"></div>
                    </div>
                    <div class="message_box">
                        <b>{{Auth::user()->name}}</b>
                        <br>
                        <b>{{Auth::user()->email}}</b>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="wrap_menu">
            <div class="menu">
                <div class="menus">
                    <a href="/reception/create" class="menus_anchor" id="menus_anchor">
                        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                          <use xlink:href="{{asset('icons/bootstrap-icons.svg#shop')}}"/>
                        </svg>
                        Reception
                    </a>
                    <div class="arrow_wrap">
                        <div class="arrow_one"></div>
                        <div class="arrow_two"></div>
                    </div>
                </div>
                <div class="menus">
                    <a href="/guest" class="menus_anchor" id="menus_anchor">
                        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                          <use xlink:href="{{asset('icons/bootstrap-icons.svg#people-fill')}}"/>
                        </svg>
                        Guest
                    </a>
                    <div class="arrow_wrap">
                        <div class="arrow_one"></div>
                        <div class="arrow_two"></div>
                    </div>
                </div>
                <div class="menus">
                    <a href="/user" class="menus_anchor" id="menus_anchor">
                        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                          <use xlink:href="{{asset('icons/bootstrap-icons.svg#person-circle')}}"/>
                        </svg>
                        Users
                    </a>
                    <div class="arrow_wrap">
                        <div class="arrow_one"></div>
                        <div class="arrow_two"></div>
                    </div>
                </div>
                <div class="menus">
                    <a href="/room" class="menus_anchor" id="menus_anchor">
                        <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                          <use xlink:href="{{asset('icons/bootstrap-icons.svg#door-closed')}}"/>
                        </svg>
                        Rooms
                    </a>
                    <div class="arrow_wrap alive">
                        <div class="arrow_one"></div>
                        <div class="arrow_two"></div>
                    </div>
                </div>
                <div class="menus_mobile">
                  <a href="/reception/create" class="menus_anchor" id="menus_anchor">
                    <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#shop')}}"/>
                    </svg>
                  </a>
                </div>
                <div class="menus_mobile">
                  <a href="/guest" class="menus_anchor" id="menus_anchor">
                    <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#people-fill')}}"/>
                    </svg>
                  </a>
                </div>
                <div class="menus_mobile">
                  <a href="/user" class="menus_anchor" id="menus_anchor">
                    <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#person-circle')}}"/>
                    </svg>
                  </a>
                </div>
                <div class="menus_mobile">
                  <a href="/room" class="menus_anchor" id="menus_anchor">
                    <svg class="bi" width="1.3em" height="1.3em" fill="currentColor" color="currentColor">
                      <use xlink:href="{{asset('icons/bootstrap-icons.svg#door-closed')}}"/>
                    </svg>
                  </a>
                  <div class="arrow_wrap_mobile2 alive">
                      <div class="arrow_one_mobile"></div>
                      <div class="arrow_two_mobile"></div>
                  </div>
                </div>
                <div class="main_body">
                   @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/my_jquery.js')}}"></script>
</body>
</html>
