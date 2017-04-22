<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">@lang('menu.Kleannham')</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('about') ? 'active' : ''}}">
                    <a href="{{ url('/about') }}">@lang('menu.About')</a>
                </li>
                <li class="{{Request::is('services') ? 'active' : ''}}">
                    <a href="#">@lang('menu.Service')</a>
                </li>
                <li class="{{Request::is('contact') ? 'active' : ''}}">
                    <a href="{{ url('/contact') }}">@lang('menu.Contact')</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if( Auth::guest() )
                    <li class="{{Request::is('login') ? 'active' : ''}}">
                        <a href="{{ url('/login') }}">@lang('authentication.Login')</a>
                    </li>
                    <li class="{{Request::is('register') ? 'active' : ''}}">
                        <a href="{{ url('/register') }}">@lang('authentication.Register')</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>       
                        </ul>
                        
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    @if (App::isLocale('kh')) 
                        <img src="{{url('flags/1x1/kh.svg')}}" width="25px" />
                    @else 
                        <img src="{{url('flags/1x1/us.svg')}}" width="25px" /> 
                    @endif 
                    Language <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ App::isLocale('kh') ? 'active' : '' }}">
                            <a href="{{url('/locale/kh')}}"><img src="{{url('flags/4x3/kh.svg')}}" width="25px" /> Khmer</a>
                        </li>
                        <li class="{{ App::isLocale('en') ? 'active' : '' }}">
                            <a href="{{url('/locale/en')}}"><img src="{{url('flags/4x3/us.svg')}}" width="25px"/> English</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>