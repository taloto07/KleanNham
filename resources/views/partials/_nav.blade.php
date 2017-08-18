<div class="header-wrapper {{ Request::is('/') ? 'header-transparent header-light' : '' }}">
    <div class="header">
      <div class="container-fluid">
        <div class="header-inner">
          <div class="navigation-toggle toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- /.header-toggle -->
          <div class="header-logo">
            <a href="{{url('/')}}">
              <img src="{{asset('assets/img/logo.svg')}}" class="svg" alt="Home">
            </a>
            <a href="{{url('/')}}" class="header-title">@lang('menu.Kleannham')</a>
          </div>
          <!-- /.header-logo -->
          <div class="header-nav">
            @if( !Request::is('/') && !Request::is('search') )
              <div class="primary-nav-wrapper primary-nav-wrapper-default">
                <ul class="nav">
                  <li class="nav-item">
                    <form class="form-inline nav-link" method="GET" action="{{route('search')}}">
                      <input class="form-control search-bar" type="text" name="keyword" placeholder="search ...">
                    </form>
                  </li>
                </ul>
              </div>
            @endif
            <div class="primary-nav-wrapper primary-nav-wrapper-right">
              <ul class="nav">
                <li class="nav-item">
                  <a href="{{route('about')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('contact')}}" class="nav-link">Contact</a>
                </li>
                @if( Auth::guest() )
                  <li class="nav-item">
                    <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="{{url('/login')}}">
                      @lang('authentication.Login')
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="{{url('/register')}}">
                      @lang('authentication.Register')
                    </a>
                  </li>
                @else
                  <li class="nav-item has-sub-menu">
                    <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
                    <ul class="sub-menu">
                      <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            @lang('authentication.Logout')
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </li>
                @endif
                <li class="nav-item has-sub-menu">
                  <a href="#" class="nav-link">
                     @if (App::isLocale('kh')) 
                        <img src="{{url('flags/1x1/kh.svg')}}" width="25px" />
                    @else 
                        <img src="{{url('flags/1x1/us.svg')}}" width="25px" /> 
                    @endif 
                    @lang('authentication.Language')
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="{{url('/locale/en')}}">
                        <img src="{{url('flags/1x1/us.svg')}}" width="25px" />English
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/locale/kh')}}">
                        <img src="{{url('flags/1x1/kh.svg')}}" width="25px" />Khmer
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.header-nav -->
        </div>
        <!-- /.header-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header -->
  </div>
  <!-- /.header-wrapper -->