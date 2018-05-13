@extends('home')

@section('content')

    <div class="wrapper">
        <div class="wrapper-left">
            <aside>
                <div class="a-aside">
                    <div class="categories">
                        <ul>
                            <li>
                                <p>Clothing</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">T-shirts</a></li>
                                        <li><a href="#">Sweatshirts</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <p>Accessories</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Caps</a></li>
                                        <li><a href="#">Charms</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <p>Homeware</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">Cups</a></li>
                                        <li><a href="#">Pillows</a></li>
                                        <li><a href="#">Locks</a></li>
                                        <li><a href="#">Decorations</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <p>Stationary</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">Pens & Pencils</a></li>
                                        <li><a href="#">Notebooks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                        <li><a href="#">Markers</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <p>IUT Sports</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">uniform for football</a></li>
                                        <li><a href="#">uniform for basketball </a></li>
                                        <li><a href="#">uniform for cheerleaders </a></li>
                                        <li><a href="#">Socks</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <p>Graduation Gifts</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#">Gift Cards</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <p>Others</p>
                                <div class="subcat">
                                    <ul>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>



        <!-- +++++++++++++++++++++++++++++ LIST OF ALL PRODUCTS ++++++++++++++++++++ -->
        <div class="wrapper-right">
            <section>
                <div class="s-hot cat-hot">
                    <div class="new new-prod">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/jackets.png" alt="marker">
                                <div class="triangle">
                                    <p>New</p>
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
                                <p class="r-info">Jacket with the emblem of IUT</p>
                                <p class="lighten">82000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/poloshirts.png" alt="marker">
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
                                <p class="r-info">Polo-shirt with the emblem of IUT</p>
                                <p class="lighten">62000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/socks.png" alt="marker">
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
                                <p class="r-info">Socks with the emblem of IUT</p>
                                <p class="lighten">22000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/sweatshirts.png" alt="marker">
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
                                <p class="r-info">Sweatshirt with the emblem of IUT</p>
                                <p class="lighten">75000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/t-shirt.png" alt="marker">
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
                                <p class="r-info">T-shirt with the emblem of IUT</p>
                                <p class="lighten">50000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/hoodies.png" alt="marker">
                                <div class="triangle">
                                    <p>New</p>
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
                                <p class="r-info">Hoody with the emblem of IUT</p>
                                <p class="lighten">89000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/uniform_bascketball.png" alt="marker">
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
                                <p class="r-info">Basketball uniform with the emblem of IUT</p>
                                <p class="lighten">120000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/uniform_cheerleader.png" alt="marker">
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
                                <p class="r-info">Cheerleader uniform with the emblem of IUT</p>
                                <p class="lighten">105000 UZS</p>
                            </div>
                        </div>
                    </div>
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/marker.png" alt="marker">
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
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/marker.png" alt="marker">
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
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/marker.png" alt="marker">
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
                    <div class="new">
                        <a href="#">
                            <div class="hot-image">
                                <img src="img/images/marker.png" alt="marker">
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
            </section>
        </div>
    </div>
    @endsection
