<!DOCTYPE html>
<html lang="en">
<head>
    <title>       Registre
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="log/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/css/util.css">
    <link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->
</head>
<body>


    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-37">
       Registre
                </span>
              <form method="POST" action="{{ route('wel') }}">
                        @csrf
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100 {{ $errors->has('name') ? ' is-invalid' : '' }}"" id="name" type="text" placeholder="nom" name="name" value="{{ old('name') }}" required autofocus>
                    <span class="focus-input100"></span>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input type="text" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}"placeholder="email " name="email"  id="email" value="{{ old('email') }}" required>
                    <span class="focus-input100"></span>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>


                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input id="password" type="password"  class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="mot de passe " name="password" required>
                    <span class="focus-input100"></span>
                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>


                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input id="password-confirm" type="password"  class="input100 "placeholder="mot_de passe_confirmation " name="password_confirmation" required>
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                      Inscrire
                    </button>
                </div>
            </form>


        </div>
    </div>
     </div>


    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/bootstrap/js/popper.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/daterangepicker/moment.min.js"></script>
    <script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="log/js/main.js"></script>

</body>
</html>
