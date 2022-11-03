<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}} | {{trans('login.Log in')}} </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{publicPath()}}/admin_sources/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{publicPath()}}/admin_sources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{publicPath()}}/admin_sources/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{publicPath()}}/admin_sources/index2.html" class="h1"><b>{{config('app.name')}} {{trans('login.login')}}</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">{{trans('login.Sign in to start your session')}}</p>

            @if (session('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif

            <form action="" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="input-group mb-3">
                    @if (session('email'))
                        <input type="email" name="email" class="form-control" required value="{{session('email')}}">
                    @else
                        <input type="email" name="email" class="form-control" required placeholder="{{trans('login.Email')}}">
                    @endif

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" required placeholder="{{trans('login.Password')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                {{trans('login.Remember Me')}}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{trans('login.Sign In')}}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!--<div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>-->
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">{{trans('login.I forgot my password')}}</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">{{trans('login.Register a new membership')}}</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{publicPath()}}/admin_sources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{publicPath()}}/admin_sources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{publicPath()}}/admin_sources/dist/js/adminlte.min.js"></script>
</body>
</html>
