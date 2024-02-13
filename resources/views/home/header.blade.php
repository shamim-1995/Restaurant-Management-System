<div class="header">
  <div class="container">
      <a href="#" class="navbar-brand scroll-top">Friends Restaurant</a>
      <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
              <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>
          <!--/.navbar-header-->
          <div id="main-nav" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('our_menu')}}">Our Menus</a></li>
                  <li><a href="{{url('blog')}}">Blog Entries</a></li>
                  <li><a href="{{url('contact')}}">Contact Us</a></li>
                  <li><a href="{{url('show_cart')}}">My Cart<span class="badge rounded-pill bg-danger" style="background-color: #eb4569;
                    color: #fff;
                    padding: 3px 8px;
                    border-radius: 10px;
                    position: absolute;
                    top: 3px;
                    right: -5px;">
                    {{$carts}}
                  </span></a></li>
                  @if (Route::has('login'))
                  
                    @auth
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$username}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile.show') }}">Profile</a></li>
                            <li><a href="{{url('reservation')}}">My Reservation</a></li>
                            <li><a href="{{url('order')}}">My Order</a></li>
                            <li><a href="{{url('address')}}">My Address</a></li>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    <span class="logout" style="padding: 10px 40px;">Logout</span>
                                </a>
                            </form>
                            
                        </ul>
                    </li>

                    
                  
                  @else
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Signup</a></li>
                  @endauth
                  @endif
              </ul>
          </div>
          <!--/.navbar-collapse-->
      </nav>
      <!--/.navbar-->
  </div>
  <!--/.container-->
</div>
<!--/.header-->