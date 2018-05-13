<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>IUT Shop</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="ishome">
<div class="main-page">
    @section('navigation')
    <!-- ++++++++++++++++++++++++++++++++++ TOP NAVIGATION ++++++++++++++++++++++++++++ -->
    <nav>
        <div class="n-nav">
            <div class="n-center">
                <ul>
                    <li><a href="#">
                            <i class="fa fa-info-circle"></i>About Us
                        </a></li>
                    <li><a href="#">
                            <i class="fa fa-fire"></i>Hot Products
                        </a></li>
                    <li><a href="#">
                            <span><i class="fa fa-phone"></i></span>Contact Us
                        </a></li>
                </ul>
            </div>
            <div class="n-right">
                <div class="n-eye">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="n-lang">
                    <ul>
                        <li><a href="#">UZ</a> |</li>
                        <li><a href="#">EN</a> |</li>
                        <li><a href="#">RU</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @show
    <!-- ++++++++++++++++++++++++++ HEADER UNDER THE NAVIGATION +++++++++++++++++++ -->
    @section('header')
    <header>
        <div class="h-header">
            <div class="h-visible">
                <div class="h-image">
                    <a href="#">
                        <img src="img/images/theIUTSHOP.png" alt="logo">
                    </a>
                </div>
                <div class="h-panel-wrap">
                    <div class="h-dropdowns">
                        <div class="dropdown">
                            <ul>
                                <li id="dep">
                                    <i class="fa fa-align-justify"></i> Departments <span><i class="fa fa-angle-down"></i></span>
                                </li>
                                <li id="drop-help">
                                    <i class="fa fa-question-circle"></i> Help <span><i class="fa fa-angle-down"></i></span>
                                    <div class="h-invisible">
                                        <div class="drop-help">
                                            <ul>
                                                <li><a href="#">Account Settings</a></li>
                                                <li><a href="#">Payments & Gift Cards</a></li>
                                                <li><a href="#">Returns & Refunds</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="search">
                            <div class="ib pt">
                                <div class="h-drop-dep">All Departments</div>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="ib pt1">
                                <input type="text" placeholder="Search...">

                            </div>
                            <div class="search-button ib">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="h-right">
                        <ul>
                            <li><a href="#">Sign in</a> | </li>
                            <li id="drop-fav">
                                <span><i class="fa fa-heart"></i></span> |
                                <!--+++++++++++++++++++++++++++++++++++++++++ HERE IS DROPDOWN MENU FOR FAVORITE WRITTEN ++++++++++++++++++++++++++++  -->
                                <div class="h-invisible">
                                    <div class="drop-favorite">
                                        <h3>Favorite(<span>15</span>)</h3>
                                        <div class="list-fav">
                                            <ul>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="drop-bag" class="bag"><span><i class="fa fa-shopping-bag"></i></span>
                                <!--+++++++++++++++++++++++++++++++++++++++++ HERE IS DROPDOWN MENU FOR BAG WRITTEN ++++++++++++++++++++++++++++  -->
                                <div class="h-invisible">
                                    <div class="drop-bag">
                                        <h3>Bag(<span>2</span>)</h3>
                                        <div class="list-fav">
                                            <ul>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fav-wrap">
                                                        <a href="#">
                                                            <div class="fav">
                                                                <div class="left-image">
                                                                    <img src="img/images/cap.png" alt="cap">
                                                                </div>
                                                                <div class="right-text">
                                                                    <p>Cap with emblem of IUT</p>
                                                                    <p class="price"><span>45000</span> UZS</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="fav-but">
                                                            <div class="trash">
                                                                <i class="fa fa-trash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bag-bottom">
                                            <div class="bag-total">
                                                <p>Total: <span>105000 UZS</span></p>
                                            </div>
                                            <div class="bag-button">
                                                <button class="button">Check out</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--++++++++++++++++++++++++++++++++++ DEPARTMENTS DROPDOWN ++++++++++++++++++++++++++++  -->
            <!--++++++++++++++++++++++++++++++++++ PART OF THE HEADER ++++++++++++++++++++++++++++  -->
            <div class="h-invisible">
                <div class="drop-departments" id="drop-dep">
                    <div class="leftmost">
                        <ul id="left-dep">
                            <li><a href="{{route('categories')}}">Clothing</a></li>
                            <li><a href="{{route('categories')}}">Accessories</a></li>
                            <li><a href="{{route('categories')}}">Homeware</a></li>
                            <li><a href="{{route('categories')}}">Stationary</a></li>
                            <li><a href="{{route('categories')}}">IUT Sports</a></li>
                            <li><a href="{{route('categories')}}">Graduation Gifts</a></li>
                            <li><a href="{{route('categories')}}">Others</a></li>
                        </ul>
                    </div>
                    <div id="center-dep" class="central">
                        <ul>
                            <li><a href="#">Hoodies</a></li>
                            <li><a href="#">T-shirts</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">loodies</a></li>
                            <li><a href="#">T-shirts</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">poodies</a></li>
                            <li><a href="#">T-shirts</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">roodies</a></li>
                            <li><a href="#">T-shirts</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Hoodies</a></li>
                            <li><a href="#">T-shirts</a></li>
                            <li><a href="#">Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>
                    <div id="right-dep" class="rightmost">
                        <ul>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/t-shirt.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cup.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cap.png" alt="T-shirt">
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/t-shirt.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cup.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cap.png" alt="T-shirt">
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/t-shirt.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cup.png" alt="T-shirt">
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    T-shirts
                                </div>
                                <div class="image">
                                    <img src="img/images/cap.png" alt="T-shirt">
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
        @show
            <!-- ++++++++++++++++++++++++++++++++ FIRST SECTION WITH MAIN IMAGE ++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++ START SHOPPING BUTTON IS HERE ++++++++++++++++++++ -->
        @section('content')
            <section>
                <div class="s-main" style="background-image: url(img/images/main4.png);">
                    <div class="image">
                        <!-- <img src="img/images/main4.png" alt="main"> -->
                    </div>
                    <div class="s-button">
                        <button class="button"><i class="fa fa-play"></i><span>Start Shopping</span></button>
                    </div>
                </div>
            </section>

            <!-- +++++++++++++++++++++++++++++++++ SEVERAL SEPARATORS ARE PUT HERE +++++++++++++++++++-->
            <!-- +++++++++++++++++++++++++++++++++ WITH SAME CLASS NAMES AND STYLES +++++++++++++++++++-->
            <div id="sabout" class="separator">
                <hr>
                <div class="sep-heading">
                    <h2>
                        <i class="fa fa-info-circle"></i>About Us
                    </h2>
                </div>
            </div>
            <!-- ++++++++++++++++++++++++++++++++++++ THE SECTION "ABOUT US" +++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++ REQUIRES JS SLIDER +++++++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++ BOOTSTRAP GRID IS USED +++++++++++++++++++++++++ -->
            <section>
                <div class="s-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="image-slider slideshow-container">
                                    <div id="m-image" class="m-image">
                                        <div class="image-slide fade">
                                            <img src="img/images/About Us.png" alt="About us">
                                        </div>
                                        <div class="image-slide fade">
                                            <img src="img/images/About Us.png" alt="About us">
                                        </div>
                                        <div class="image-slide fade">
                                            <img src="img/images/About Us.png" alt="About us">
                                        </div>
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                        <div class="m-dots">
                                            <span class="m-dot" onclick="currentSlide(1)"></span>
                                            <span class="m-dot active" onclick="currentSlide(2)"></span>
                                            <span class="m-dot" onclick="currentSlide(3)"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-sm-1 col-sm-6">
                                <div class="about-right">
                                    <p>We are official IUT merchandise representatives.
                                        The shop was established in 2017.
                                        If you have any questions feel free to contact us.
                                        Contacts are given in the bottom of the given page.
                                        All the rights are reserved.</p>
                                    <div class="secondary-images">
                                        <div class="s-image"><img src="img/images/About Us.png" alt="about us"></div>
                                        <div class="s-image"><img src="img/images/About Us.png" alt="about us"></div>
                                        <div class="s-image"><img src="img/images/About Us.png" alt="about us"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="shot" class="separator">
                <hr>
                <div class="sep-heading">
                    <h2>
                        <i class="fa fa-fire"></i>Hot Products
                    </h2>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++ THE SECTION "HOT PRODUCTS" +++++++++++++++++++++ -->
            <!-- ++++++++++++++++++++++++++++++++++++ BOOTSTRAP GRID IS USED +++++++++++++++++++++++++ -->
            <section>
                <div class="s-hot">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="new">
                                    <div class="hot-heading">
                                        <a href="#">
                                            <h1>New Arrivals</h1>
                                            <p>view more >></p>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="hot-image">
                                            <img src="img/images/cap.png" alt="cap">
                                            <div class="triangle">
                                                <p>New</p>
                                            </div>
                                            <div class="hot-bag">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="hot-info">
                                        <div class="left-heart">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="right-info">
                                            <p class="r-info">Cap with the emblem of IUT</p>
                                            <p class="lighten">45000 UZS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="best">
                                    <div class="hot-heading">
                                        <a href="#">
                                            <h1>Bestsellers</h1>
                                            <p>view more >></p>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="hot-image">
                                            <img src="img/images/t-shirt.png" alt="cap">
                                            <div class="triangle">
                                                <p>Hit</p>
                                            </div>
                                            <div class="hot-bag active">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="hot-info">
                                        <div class="left-heart active">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="right-info">
                                            <p class="r-info">Cap with the emblem of IUT</p>
                                            <p class="lighten">60000 UZS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bargain">
                                    <div class="hot-heading">
                                        <a href="#">
                                            <h1>Bargain</h1>
                                            <p>view more >></p>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="hot-image">
                                            <img src="img/images/cup.png" alt="cap">
                                            <div class="triangle">
                                                <p>Sale</p>
                                            </div>
                                            <div class="hot-bag">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="hot-info">
                                        <div class="left-heart">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="right-info">
                                            <p class="r-info">Cap with the emblem of IUT</p>
                                            <p class="lighten">15000 UZS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="separator">
                <hr>
                <div class="sep-heading">
                    <h2 class="saccent">
                        <i class="fa fa-play"></i>Start Shopping
                    </h2>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++ SECTION "START SHOPPING" ++++++++++++++++++++++++++++ -->
            <!-- +++++++++++++++++++++++++++++++++++++ UNLIMIT ++++++++++++++++++++++++++++++++++++++++ -->
            <section>
                <div class="s-shopping">
                    <div class="shopping-half">
                        <div class="shopping-left">
                            <div class="first-row">
                                <div class="shopping-half">
                                    <a href="#">
                                        <div class="back-saccent">
                                            <p>Hoodies</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="shopping-half">
                                    <a href="#">
                                        <div class="back-bright">
                                            <p>Bags</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="second-row">
                                <div class="shopping-small">
                                    <a href="#">
                                        <div class="back-grey">
                                            <p class="vertical-l">Caps</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="shopping-big">
                                    <a href="#">
                                        <div class="back-white">
                                            <p class="height-auto">T-Shirts</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="last-row">
                                <div class="shopping-big">
                                    <a href="#">
                                        <div class="back-dark">
                                            <p>Stickers</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="back-accent">
                                            <p>Flash cards</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="shopping-small">
                                    <a href="#">
                                        <div class="back-bright">
                                            <p class="vertical-l">Socks</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopping-half">
                        <div class="shopping-right">
                            <div class="left-big-right">
                                <div class="first-row-r">
                                    <a href="#">
                                        <div class="back-grey">
                                            <p>Mobile cases</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="second-row-r">

                                    <div class="left-r">
                                        <a href="#">
                                            <div class="back-accent">
                                                <p>Gifts</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="center-r">
                                        <a href="#">
                                            <div class="back-white">
                                                <p>Cups</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="right-r">
                                        <a href="#">
                                            <div class="back-dark">
                                                <p>Notebooks</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="last-row-r">
                                    <a href="#">
                                        <div class="back-saccent">
                                            <p>Markers</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="right-small-right">
                                <a href="#">
                                    <div class="back-accent">
                                        <p>Pencils</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="scontact" class="separator">
                <hr>
                <div class="sep-heading">
                    <h2 class="invert">
                        <i class="fa fa-phone"></i>Contact Us
                    </h2>
                </div>
            </div>


    <!-- +++++++++++++++++++++++++++++++++ THE SECTION "CONTACT US" ++++++++++++++++++++++ -->
    <!-- ++++++++++++++++++++++++++++++++ CONTAINS THE FORM TO SUBMIT ++++++++++++++++++++ -->
    <section>
        <div class="s-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left-contact">
                            <div class="text-contact">
                                <p>Uzbekistan, Tashkent city
                                    M.Ulugbek District, Ziyolilar Street, 9
                                    Inha University in Tashkent</p>
                                <p class="white">Phone:  +998 71 289 99 99<br>
                                    E-mail:  iutmerchandiseinfo@iut.uz</p>
                            </div>
                            <div class="social-contact">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="offset-md-3 col-md-5">
                        <div id="form-contact" class="form-contact">
                            <form>
                                <table>
                                    <tr>
                                        <th></th>
                                        <th><h2>Feel free to contact us!</h2></th>
                                    </tr>
                                    <tr>
                                        <td><label>Name</label></td>
                                        <td><input type="text" name="name" class="form-control" placeholder="Name" required></td>
                                    </tr>
                                    <tr>
                                        <td><label>E-mail</label></td>
                                        <td><input type="text" name="email" class="form-control" placeholder="Email" required></td>
                                    </tr>
                                    <tr>
                                        <td><label>Title</label></td>
                                        <td><input type="text" name="title" class="form-control" placeholder="Title" required></td>
                                    </tr>
                                    <tr>
                                        <td><label>Text</label></td>
                                        <td><textarea name="text" rows="6" class="form-control" placeholder="Text"></textarea></td>
                                    </tr>
                                </table>
                                <div class="submit-button">
                                    <button class="btn btn-success btn-submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @show
    <!--+++++++++++++++++++++++++++++++++++++++++ FOOTER ++++++++++++++++++++++++++++  -->
    @section('footer')
    <footer>
        <div class="f-footer">
            <div class="f-table">
                <table>
                    <tr>
                        <th>Customer Service</th>
                        <th>Team</th>
                        <th>IUT</th>
                    </tr>
                    <tr>
                        <td><a href="#">Delivery Information</a></td>
                        <td><a href="#">Meet the team</a></td>
                        <td><a href="#"><i class="fa fa-link"></i>Inha University in Tashkent</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Privacy Notice</a></td>
                        <td><a href="#">Vacancies</a></td>
                        <td><a href="#"><i class="fa fa-link"></i>IUT Edupage</a></td>
                    </tr>
                </table>
            </div>
            <div class="qr-table">
                <table>
                    <tr>
                        <td>Copyright © 2018<br>
                            All the rights reserved</td>
                        <td><img src="img/images/qr_code_black.png" alt="QR code"></td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
    @show
</div>
<div class="top" title="moveup"><i class="fa fa-angle-double-up"></i></div>
<link rel="stylesheet" href="css/main.min.css">
<script src="js/scripts.min.js"></script>
<script>
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){

        e.preventDefault();



        var name = $("input[name=name]").val();

        var email = $("input[name=email]").val();

        var title = $("input[name=title]").val();

        var text = $("input[name=text]").val();



        $.ajax({

            type:'POST',

            url:'/',

            data:{name:name, email:email, title:title, text:text},

            success:function(data){

                alert(data.success);

            }

        });



    });
</script>
</body>
</html>
