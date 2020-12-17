@extends('Reception.sub_template_check_out')

@section('sub_content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header">
            <h4>Check-in List</h4>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 detail_info_header_mobile">
            <h4>List</h4>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 guest_list_tablet_desktop">
        <div class="col-md-3 col-sm-3 col-xs-4 date">
            Date
        </div>
        <div class="col-md-9 col-sm-9 col-xs-8 name">
            Name
        </div>
        @foreach($guests as $guest)
            <div class="col-md-3 col-sm-3 col-xs-4 date">
                {{ $guest->created_at->format('d M Y') }}
            </div>
            <div class="col-md-9 col-sm-9 col-xs-8 name">
                <a href="/guest/{{ $guest->id }}" class="guest_detail_anchor">
                    {{ $guest->name }}
                </a>
            </div>
        @endforeach
        <div class="col-md-12" id="p-link">
            <div class="p-link">
              {{ $guests->links() }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 user_list_mobile">
        <br><br>
        <div class="col-xs-12">
          <div class="user_list_mobile_header col-xs-4">
            <h3 class="header_for_small_screens_list">List</h3>
          </div>
        </div>
        @foreach($guests as $guest)
          <div class="user_list_mobile_detail">
            <h4>{{ $guest->created_at->format('d M Y') }}</h4>
              <a href="/guest/{{$guest->id}}" class="user_detail_anchor">
                  <b>{{ $guest->name }}</b>
              </a>
              <br>
          </div>
          <br>
        @endforeach
        <div class="col-md-12" id="p-link">
            <div class="p-link">
              @if ($guests->hasPages())
                  <ul class="pagination">
                      {{-- Previous Page Link --}}
                      @if ($guests->onFirstPage())
                          <li class="disabled"><span>{{ __('Prev') }}</span></li>
                      @else
                          <li><a href="{{ $guests->previousPageUrl() }}" rel="prev">{{ __('Prev') }}</a></li>
                      @endif

                      {{-- Next Page Link --}}
                      @if ($guests->hasMorePages())
                          <li><a href="{{ $guests->nextPageUrl() }}" rel="next">{{ __('Next') }}</a></li>
                      @else
                          <li class="disabled"><span>{{ __('Next') }}</span></li>
                      @endif
                  </ul>
              @endif
            </div>
        </div>
    </div>
    <div class="reception_search_form">
        <form action="/reception/check_out/search" method="GET">
            <input type="text" name="search" placeholder="Search Name">
        </form>
    </div>
@endsection
