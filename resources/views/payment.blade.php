@extends('home')

@section('content')
    <section>
        <div class="s-authoreg payment">
            <div class="log-reg">
                <div class="line-wrap">
                    <div class="heading-wrap">
                        <div class="heading-w active">
                            <h1 class="payment-heading">
                                Login
                            </h1>
                            <div class="payment-circle"><p>1</p></div>
                        </div>
                        <div class="heading-w margin-lr">
                            <h1 class="payment-heading">
                                Payment & Customer Details
                            </h1>
                            <div class="payment-circle"><p>2</p></div>
                        </div>
                        <div class="heading-w">
                            <h1 class="payment-heading">
                                Confirmation
                            </h1>
                            <div class="payment-circle"><p>3</p></div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div id="pay-first" class="form">
                <div class="sign-in-up">
                    <form action="" method="POST">
                        <div id="sign-in" class="sign-in">
                            <input type="text" placeholder="Username..." name="ename" required>
                            <input type="password" placeholder="Password..." name="epassword" required>
                            <div class="bottom-sign">
                                <div class="sign-float">
                                    <div class="left-sign">
                                        <label>
                                            <input type="checkbox" value="remember" name="remember">
                                            <span class="checker"><i class="fa fa-check"></i></span>
                                            <p>Keep me signed in</p>
                                        </label>
                                    </div>
                                    <div class="right-sign"><button type="submit" class="button">Enter</button></div>
                                </div>
                                <div class="sign-alter">
                                    <p><a href="#">Forgot your password?</a></p>
                                    <p class="hov-span"><a href="#"><span>Do not have an account?</span> Register</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="pay-second" class="form">
                <div class="payment-grid">
                    <div class="pay-left">
                        <div class="h-invisible">
                            <h3>Your Shopping Bag (<span>3</span>)</h3>
                            <div class="drop-bag">
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

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="bag-bottom">
                            <div class="bag-total">
                                <p>Total: <span>105000 UZS</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="pay-right">
                        <div class="form form-address">
                            <form action="" method="SUBMIT">
                                <h3>Address</h3>
                                <input type="text" name="address" placeholder="Address*" required>
                                <input type="text"  class="margin" name="postIndex" placeholder="Post Index*" required>
                                <div class="checker-div">
                                    <label>
                                        <input type="checkbox" value="iut" name="iut">
                                        <span class="checker"><i class="fa fa-check"></i></span>
                                        <p>I want products be available in IUT</p>
                                    </label>
                                </div>
                                <h3 class="mtop">Payment Details</h3>
                                <div class="checkers">
                                    <label>
                                        <input type="radio" value="visa" name="card" checked>
                                        <span class="checker"><i class="fa fa-check"></i></span>
                                        <p><img src="img/images/brands/visa.png" alt="visa"></p>
                                    </label>

                                    <label>
                                        <input type="radio" value="payme" name="card">
                                        <span class="checker"><i class="fa fa-check"></i></span>
                                        <p><img src="img/images/brands/Payme.jpg" alt="payme"></p>
                                    </label>

                                    <label>
                                        <input type="radio" value="click" name="card">
                                        <span class="checker"><i class="fa fa-check"></i></span>
                                        <p><img src="img/images/brands/click.png" alt="click"></p>
                                    </label>
                                </div>
                                <div class="card-num">
                                    <p class="card-number">Card Number</p>
                                    <p><input type="text" name="cardNum" required></p>
                                </div>
                                <button class="button" type="submit">Enter</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div id="pay-third">
                <h1 id="pay-success" class="pay-success">Products will be available in 1-2 days. Thank you for your order.</h1>
            </div>


        </div>
    </section>
    @endsection
