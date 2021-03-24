<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>460 West 34th Street, 15th floor, New York - Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">

                        @if(auth()->user())
                            <a href="{{route('profile')}}">Profile</a>
                        @else
                            <a href="{{route('login')}}">Login</a>
                        @endif

                        <div class="btn-group ps-dropdown">
                            <a href="{{route('user.logout')}}">Logout</a>
                        </div>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                                              aria-haspopup="true" aria-expanded="false">Language<i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Japanese</a></li>
                                <li><a href="#">Chinese</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo"><a class="ps-logo" href="{{route('home')}}"><img src="images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item"><a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">NEW RELEASES</a></li>
                                        <li><a href="product-listing.html">FEATURES SHOES</a></li>
                                        <li><a href="product-listing.html">BEST SELLERS</a></li>
                                        <li><a href="product-listing.html">NOW TRENDING</a></li>
                                        <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>
                                        <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>
                                        <li><a href="product-listing.html">FAN GEAR</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Shoes</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">All Shoes</a></li>
                                        <li><a href="product-listing.html">Running</a></li>
                                        <li><a href="product-listing.html">Training & Gym</a></li>
                                        <li><a href="product-listing.html">Basketball</a></li>
                                        <li><a href="product-listing.html">Football</a></li>
                                        <li><a href="product-listing.html">Soccer</a></li>
                                        <li><a href="product-listing.html">Baseball</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">CLOTHING</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Accessories</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">BRAND</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">NIKE</a></li>
                                        <li><a href="product-listing.html">Adidas</a></li>
                                        <li><a href="product-listing.html">Dior</a></li>
                                        <li><a href="product-listing.html">B&G</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#">Women</a></li>
                    <li class="menu-item"><a href="#">Kids</a></li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                    <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search Product…">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                @php
                    $carts = session()->has('cart') ? session()->get('cart') : [];
$total_price = 0;
$total_qty=0;
foreach ($carts as $item){
      $total_price+=$item['quantity']*$item['price'];
$total_qty+=$item['quantity'];
}

                @endphp
                <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>{{$total_qty}}</i></span><i
                            class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">

                            @foreach($carts as $cart)
                                <div class="ps-cart-item">
                                    <a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail">
                                        <a href="product-detail.html"></a><img src="@if(!filter_var($cart['photo'], FILTER_VALIDATE_URL)){{asset('assets/uploads/'.$cart['photo'])}}@else{{$cart['photo']}}@endif" alt="">
                                    </div>
                                    <div class="ps-cart-item__content">
                                        <a class="ps-cart-item__title"
                                           href="product-detail.html">{{$cart['title']}}</a>
                                        <p>
                                            <span>Quantity:<i>{{$cart['quantity']}}</i></span><span>Total:<i>৳{{$cart['quantity']*$cart['price']}}</i></span>
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="ps-cart__total">
                            <p>Number of items:<span>{{$total_qty}}</span></p>
                            <p>Item Total:<span>৳{{$total_price}}</span></p>
                        </div>
                        <div class="ps-cart__footer"><a class="ps-btn" href="{{route('checkout')}}">Check out<i
                                    class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>
