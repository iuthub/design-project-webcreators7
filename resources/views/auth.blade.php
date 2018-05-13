@extends('home')
@section('content')
    <head>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <section>
        <div class="s-authoreg">
            <div class="log-reg">
                <div class="log-reg-headings">
                    <div class="login">
                        <h2 class="authorize active">Login</h2>
                    </div>
                    <div class="reg">
                        <h2 class="register">Register</h2>
                    </div>
                </div>
                <hr>
            </div>
            <div class="form">
                <div class="sign-in-up">
                    <form id="in-sign" action="" method="">
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
                                    <p class="hov-span register"><span>Do not have an account?</span> Register</p>
                                </div>
                            </div>
                        </div>

                    </form>
                    <form id="up-sign" action="" method="">
                        <!-- +++++++++++++++++++++++++++ IN SIGN UP THERE NEED TO BE AJAX ++++++++++++++++++++++ -->
                        <div id="sign-up" class="sign-in sign-up">
                            <input type="text" id="rname" onkeyup="validateName()" placeholder="Name*" name="rname"><label class="dn" id="commentNamePrompt"></label>
                            <input type="text" id="rsurname" onkeyup="validateSurname()" placeholder="Surname*" name="rsurname"><label class="dn" id="commentSurnamePrompt"></label>
                            <input type="text" id="rmail" onkeyup="validateMail()" placeholder="E-mail*" name="rmail"><label class="dn" id="commentMailPrompt"></label>
                            <input type="password" id="rpsw" onkeyup="validatePsw()" placeholder="Password*" name="rpassword"><label class="dn" id="commentPswPrompt"></label>
                            <div class="bottom-sign bottom-reg">
                                <div class="sign-float">
                                    <div class="left-sign left-reg">
                                        <label>
                                            <input type="radio" name="sex" value="male" checked>
                                            <span class="checker"><i class="fa fa-check"></i></span>
                                            <p>Male</p>
                                        </label>
                                        <label class="ml">
                                            <input type="radio" name="sex" value="female">
                                            <span class="checker"><i class="fa fa-check"></i></span>
                                            <p>Female</p>
                                        </label>
                                    </div>
                                    <div class="right-sign right-reg">
                                        <button type="submit" class="button">Enter</button>
                                    </div>
                                </div>
                                <div class="sign-alter">
                                    <p class="hov-span authorize"><span>Have you already registered?</span> Login</p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <h1 id="reg-success" class="reg-success">Congratulations! You are registered!</h1>
            <div id="ajaxform" class="ajaxform">
                <h3 id="confirm" class="confirm">Confirmation code is sent to your e-mail. Please, confirm your registration.</h3>
                <div class="form formc">
                    <form action="" method="">
                        <div  class="sign-in sign-up">
                            <!-- <input type="text" placeholder="Confirmation code*" name="ccode" required> -->
                            <div class="bottom-sign bottom-reg">
                                <div class="center">
                                    <div class="right-sign right-reg button-center">
                                        <!-- <button type="submit" class="button tac">Confirm</button> -->
                                    </div>
                                </div>
                                <div class="sign-alter">
                                    <p class="hov-span authorize"><span>Have you already registered?</span> Login</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        $(".btn-submit").click(function(e){

            e.preventDefault();



            var name = $("input[name=rname]").val();

            var email = $("input[name=rsurname]").val();

            var title = $("input[name=rmail]").val();

            var text = $("input[name=rpassword]").val();



            $.ajax({

                type:'POST',

                url:'/',

                data:{rname:rname, rsurname:rsurname, rmail:rmail, rpassword:rpassword},

                success:function(data){

                    alert(data.success);

                }

            });

        });
    </script>
@endsection
