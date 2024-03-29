<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lahan Sanggau - Login</title>
    <link href={{ asset('assets/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/datepicker3.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/styles.css') }} rel="stylesheet">
    <link href={{ asset('assets/images/sanggau.png') }} rel="shortcut icon">
    <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
</head>

<body style="background: url({{ asset('assets/images/sawah1.jpg') }}); background-size: 100%;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="text-center">
                    <img src={{ asset('assets/images/sanggau.png') }} width="20%" alt="">
                </div>
                <div class="panel-heading text-center">SIG LAHAN SANGGAU</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" id="email" placeholder="E-mail" name="email" type="email"
                                    autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" placeholder="Password" name="password"
                                    type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->


    <script src={{ asset('assets/js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
</body>

</html>
