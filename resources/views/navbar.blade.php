<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo1.png" alt="Restaurant Logo" width="40" height="40">
                <u><span style="font-family: Tangerine; font-weight: bold; font-size: 40px">Kitchen Ette</span></u>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                        @php
                        $cartCount = $cartCount ?? 0; 
                        @endphp
                        <a class="nav-link" href="{{ route('cart') }}">Cart
                            @if($cartCount>=0)
                                 <span class="badge badge-pill badge-dark">{{$cartCount}}</span>
                            @endif</a>
                            </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf 
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                        </li>

                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">Sign Up</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>