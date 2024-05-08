
<nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="index.html"><img alt="logo" src="/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-5">
    <li class="nav-item active">
    <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-danger">New</span></a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Restaurants
    </a>
    <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
    <a class="dropdown-item" href="listing.html">Listing</a>
    <a class="dropdown-item" href="detail.html">Detail + Cart</a>
    <a class="dropdown-item" href="checkout.html">Checkout</a>
    </div>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pages
    </a>
    <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
    <a class="dropdown-item" href="track-order.html">Track Order</a>
    <a class="dropdown-item" href="invoice.html">Invoice</a>
    <a class="dropdown-item" href="login.html">Login</a>
    <a class="dropdown-item" href="register.html">Register</a>
    <a class="dropdown-item" href="404.html">404</a>
    <a class="dropdown-item" href="extra.html">Extra :)</a>
    </div>
    </li>
    <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
            {{ Auth::user()->name }}
        @else
            <img alt="Generic placeholder image" src="/img/user/4.png" class="nav-osahan-pic rounded-pill" style="height: 20px;"> My Account
        @endif
            
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{url('userOrders')}}">Order</a></li>
          <li><a class="dropdown-item" href="#">Offers</a></li>
          <li><a class="dropdown-item" href="#">Favourite</a></li>
        </ul>
      </div>
    <li class="nav-item dropdown dropdown-cart">
        <a class="nav-link dropdown-toggle" href="/cart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-basket"></i> Cart @if(isset($cartCount))<span class="badge badge-success">{{ $cartCount }}</span>@endif
        </a>
        
    </li>
    </ul> 
    
    
    {{-- <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

        </ul>



        
                
        
        <!-- Right Side Of Navbar -->
        {{-- <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul> --}}
    </div>
</div>

@auth
           <a href="/user-logout"> <button class="btn btn-danger ml-3 border">Logout</button></a>
           @else
           <a href="/user-login"> <button class="btn btn-danger ml-3 border">Login</button></a>
           @endif
    

    </div>
    </div>
    </nav>