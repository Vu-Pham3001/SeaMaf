<div class="header_top pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 d-flex justify-content-center align-items-center mt-2">
                <a href="/" class="title-header" style="color: #000;"><h4>RVM SeaMaf</h4></a>
            </div>
            <div class="col-xl-6 col-lg-5 mt-2">
                <form action="{{ route('search') }}" method="POST">
                @csrf
                    <input type="text" placeholder="Search on RVM SeaMaf ..." class="search w-100" name="keyword" style="padding: 0 19px;">
                </form>
            </div>
            <div class="col-xl-4 col-lg-5 mt-2">
                <div class="info-product d-flex justify-content-center align-items-center">
                    <div class="items-1">
                        <form action="">
                            <select name="" id="" style="border: none;">
                                <option value="DollarUS">U.S Dollar</option>
                                <option value="DollarRTGS">RTGS Dollar</option>
                                <option value="SARand">SA Rand</option>
                                <option value="Pound">British Pound</option>
                            </select>
                        </form>
                    </div>

                    <div class="items-2 d-flex ml-3">
                        <div class="shopping-card">
                            <i class="far fa-heart"></i>
                        </div>

                        <div class="ml-1">WishList</div>
                    </div>

                    <a href="{{ route('cart')}}" class="items-3 d-flex ml-3" style="color:#000; text-decoration:none;">
                        <div class="shopping-card">
                            <i class="fas fa-shopping-bag"></i>
                        </div>

                        <div class="ml-1">Shopping Cart</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @guest
                    @if(Route::has('login') || Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Signin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register')}}">Signup</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('user', Auth::user()->id)}}" style="text-decoration:none;"><div style="padding-left:16px; color: #000;">My Profile</div></a>
                            <a href="" style="text-decoration:none;"><div style="padding-left:16px; color: #000;">My order</div></a>
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
            </ul>
        </div>
    </div>
</nav>
