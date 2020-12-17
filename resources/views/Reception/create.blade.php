@extends('Reception.sub_template')

@section('sub_content')
    <div class="col-md-12 col-sm-12">
        <div class="col-md-3 col-sm-3 detail_info_header">
            <h4>Create Check-in</h4>
        </div>
        <div class="col-md-3 col-sm-3 detail_info_header2">
            <h4>Create</h4>
        </div>
        <div class="header_for_small_screens">
            <h4 class="header_for_small_screens_create">Create</h4>
        </div>
    </div>
    <br>
    <form action="/reception" method="post">
        <div class="reception_input_data">
            {{ csrf_field() }}
            <div class="col-md-12 col-sm-12" id="wrap_input_data">
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-4 col-sm-4" id="input_data">
                        <p>
                        Guest Name :
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8" id="input_data">
                        <input type="text" name="guest_name" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-3 col-sm-4" id="input_data">
                        <p>
                        NRC :
                        </p>
                    </div>
                    <div class="col-md-9 col-sm-8" id="input_data">
                        <input type="text" name="nrc" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-4 col-sm-4" id="input_data">
                        <p>
                          Email :
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8" id="input_data">
                        <input type="text" name="email" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-3 col-sm-4" id="input_data">
                        <p>
                          Phone :
                        </p>
                    </div>
                    <div class="col-md-9 col-sm-8" id="input_data">
                        <input type="text" name="phone" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-4 col-sm-4" id="input_data">
                        <p>
                            Adult :
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8" id="input_data">
                        <input type="number" name="adult" placeholder="number only" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-3 col-sm-4" id="input_data">
                        Child :
                    </div>
                    <div class="col-md-9 col-sm-8" id="input_data">
                        <input type="number" name="child" placeholder="number only" required>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6 input_data" id="input_data">
                    <div class="col-md-3 col-sm-4" id="input_data2">
                        <p>
                            Address :
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8" id="input_data">
                        <input type="text" name="address" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 input_data">
                    <div class="col-md-3 col-sm-4" id="input_data3">
                        Room :
                    </div>
                    <div class="col-md-8 col-sm-8" id="input_data">
                        <select name="room" id="input_data4" class="reception_create_select">
                            @foreach($rooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="reception_submit_button">
                <div class="reception_submit_button">
                    <button type="submit">Create</button>
                </div>
            </div>
        </div>
    </form>
    <form action="/reception" method="post">
        {{ csrf_field() }}
        <div class="col-md-12 col-sm-12" id="user_input_data_form">
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Guest Name :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="text" name="guest_name" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      NRC :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="text" name="nrc" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Email :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="email" name="email" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Phone :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="text" name="phone" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Adult :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="number" name="adult" placeholder="number only" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Child :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="number" name="child" placeholder="number only" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="user_input_data">
              <div class="col-md-12 col-sm-12" id="user_input_data_detail">
                  <div class="col-md-3 col-sm-12">
                      Address :
                  </div>
                  <div class="col-md-9 col-sm-12">
                      <input type="text" name="address" id="user_input_data_detail_2" required>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-sm-6 input_data">
              <div class="col-md-3 col-sm-4" id="input_data3">
                  Room :
              </div>
              <div class="col-md-8 col-sm-8" id="input_data">
                  <select name="room" id="input_data4" class="reception_create_select">
                      @foreach($rooms as $room)
                          <option value="{{$room->id}}">{{$room->name}}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="col-md-12 col-sm-12" id="user_submit_button">
              <div class="user_submit_button">
                  <button type="submit">Create</button>
              </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12" id="user_submit_button_mobile">
              <div>
                  <button type="submit">Create</button>
              </div>
          </div>
      </div>
    </form>
@endsection
