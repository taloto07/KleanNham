<div class="header-wrapper {{ Request::is('/') ? 'header-transparent header-light' : '' }}">
    <div class="header">
      <div class="container">
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
            <div class="primary-nav-wrapper">
              <ul class="nav">
                {{-- <li class="nav-item has-sub-menu">
                  <a href="#" class="nav-link ">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index-directory.html"><b>1.</b> &nbsp;&nbsp;Directory Version</a></li>
                    <li><a href="index-classified.html"><b>2.</b> &nbsp;&nbsp;Classified Version</a></li>
                    <li><a href="index-job-board.html"><b>3.</b> &nbsp;&nbsp;Job Board Version</a></li>
                    <li><a href="index-real-estate.html"><b>4.</b> &nbsp;&nbsp;Real Estate Version</a></li>
                    <li><a href="index-automotive.html"><b>5.</b> &nbsp;&nbsp;Automotive Version</a></li>
                    <li><a href="index-travel.html"><b>6.</b> &nbsp;&nbsp;Travel &amp; Hotel Version</a></li>
                    <li><a href="index-restaurant.html"><b>7.</b> &nbsp;&nbsp;Restaurant Version</a></li>
                    <li><a href="admin-dashboard.html"><b>8.</b> &nbsp;&nbsp;Admin Dashboard</a></li>
                  </ul>
                </li>
                <li class="nav-item has-sub-menu">
                  <a href="#" class="nav-link active">Listings</a>
                  <ul class="sub-menu">
                    <li><a href="listings-google-map.html">Listings Google Map</a></li>
                    <li><a href="listings-grid.html">Listings Grid</a></li>
                    <li><a href="listings-rows.html">Listings Rows</a></li>
                    <li><a href="listings-detail.html">Listing Detail</a></li>
                    <li><a href="listings-my.html">My Listing</a></li>
                    <li><a href="listings-compare.html">Listings Compare</a></li>
                    <li><a href="listings-submit.html">Submit Listing</a></li>
                    <li><a href="listings-claim.html">Claim Listing</a></li>
                    <li><a href="listings-favorites.html">Favorite Listings</a></li>
                  </ul>
                </li>
                <li class="nav-item has-sub-menu">
                  <a href="#" class="nav-link ">Agencies &amp; Agents</a>
                  <ul class="sub-menu">
                    <li><a href="agents-row.html">Agents Rows</a></li>
                    <li><a href="agents-grid.html">Agents Grid</a></li>
                    <li><a href="agents-submit.html">Agent Submit</a></li>
                    <li><a href="agents-detail.html">Agent Detail</a></li>
                    <li><a href="agencies-row.html">Agencies Rows</a></li>
                    <li><a href="agencies-grid.html">Agencies Grid</a></li>
                    <li><a href="agencies-submit.html">Agency Submit</a></li>
                    <li><a href="agencies-detail.html">Agency Detail</a></li>
                  </ul>
                </li>
                <li class="nav-item has-sub-menu has-mega-menu">
                  <a href="#" class="nav-link ">Pages</a>
                  <div class="sub-menu mega-menu">
                    <ul>
                      <li><strong>Elements I.</strong></li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="user-profile-edit.html">User Profile Edit</a></li>
                      <li><a href="testimonials.html">Testimonials</a></li>
                      <li><a href="author.html">Author Detail</a></li>
                    </ul>
                    <ul>
                      <li><strong>Elements II.</strong></li>
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="filters.html">Filters</a></li>
                      <li><a href="reservations-extra-features.html">Reservations Features</a></li>
                    </ul>
                    <ul>
                      <li><strong>Elements III.</strong></li>
                      <li><a href="faq.html">FAQ</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="registration.html">Registration</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                    <ul>
                      <li><strong>Elements IV.</strong></li>
                      <li><a href="forms.html">Forms</a></li>
                      <li><a href="change-password.html">Change password</a></li>
                      <li><a href="reset-password.html">Reset password</a></li>
                      <li><a href="messages.html">Messages</a></li>
                      <li><a href="sticky-footer.html">Sticky Footer</a></li>
                    </ul>
                    <ul>
                      <li><strong>Elements V.</strong></li>
                      <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                      <li><a href="403.html">403 - Access not allowed</a></li>
                      <li><a href="404.html">404 - Page not found</a></li>
                      <li><a href="500.html">500 - Internal server error</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item has-sub-menu has-mega-menu">
                  <a href="#" class="nav-link ">Admin</a>
                  <div class="sub-menu mega-menu">
                    <ul>
                      <li>
                        <strong>Dashboards</strong>
                      </li>
                      <li><a href="admin-dashboard.html">Standard Version</a></li>
                      <li><a href="admin-dashboard-minimal-sidebar.html">Compressed Sidebar</a></li>
                      <li><a href="admin-dashboard-light-sidebar.html">Light Sidebar</a></li>
                      <li><a href="admin-dashboard-light-minimal-sidebar.html">Compressed Light Sidebar</a></li>
                    </ul>
                    <ul>
                      <li>
                        <strong>Listings</strong>
                      </li>
                      <li><a href="admin-listings.html">Listings</a></li>
                      <li><a href="admin-agencies.html">Agencies</a></li>
                      <li><a href="admin-agents.html">Agents</a></li>
                    </ul>
                    <ul>
                      <li>
                        <strong>Workflow</strong>
                      </li>
                      <li><a href="admin-projects.html">Projects</a></li>
                      <li><a href="admin-tasks.html">Tasks</a></li>
                      <li><a href="admin-users.html">Users</a></li>
                    </ul>
                    <ul>
                      <li>
                        <strong>Template Helpers</strong>
                      </li>
                      <li><a href="admin-messages.html">Messages</a></li>
                      <li><a href="admin-cards.html">Cards</a></li>
                      <li><a href="admin-forms.html">Forms</a></li>
                    </ul>
                    <ul>
                      <li>
                        <strong>Template Helpers</strong>
                      </li>
                      <li><a href="admin-media.html">Media files</a></li>
                      <li><a href="admin-tables.html">Tables</a></li>
                    </ul>
                  </div>
                  <!-- /.mega-menu -->
                </li>
                <li class="nav-item has-sub-menu">
                  <a href="#" class="nav-link ">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-grid.html">Blog Grid Right Sidebar</a></li>
                    <li><a href="blog-grid-left.html">Blog Grid Left Sidebar</a></li>
                    <li><a href="blog-detail.html">Blog Detail Right Sidebar</a></li>
                    <li><a href="blog-detail-left.html">Blog Detail Left Sidebar</a></li>
                  </ul>
                </li>--}}
              </ul> 
            </div>
            <!-- /.primary-nav-wrapper -->
            <div class="primary-nav-wrapper" style="float:right">
              <ul class="nav">
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
                      <a href="#" class="nav-link">
                        {{ Auth::user()->name }}  
                      </a>
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