<!DOCTYPE html>
@section('adminlte_css')
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

<!-- iCheck -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
@yield('css')
<html>
        <style>
                .border{
                    border-color: black;
                }
                   .imagencentro{

                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                    max-width:100%;
                    max-height:100%;
                    margin-top: 50px;
                    margin-bottom: 50px;
                   }
                   .center{
                       text-align: center;
                   }

                   .total{
                    font-weight: bold;

                }

                .titulo{
                    margin-top: 20px;
                    text-align: center;
                    margin-bottom: -60px;
                }

                @media screen and  (max-width:768px) {
                .titulo {
                    position: relative;
                    top: -17px;
                    margin-bottom: 5px;
    }
    }

                body {

                    background-color: #a1b3d1;
                }

                </style>
</head>
<body class="body">

        <div class="row">
                <div class="col-md-4">
                        <img src="{{asset('img/CASTELLANO-Y-GURANI-min-de-la-vivienda.png')}}" class="imagencentro" width="230" height="70">
                </div>
                <div class="col-md-4">
                        <img src="{{asset('img/gobierno-nacional.png')}}" class="imagencentro"  width="250" height="60">
                </div>
                <div class="col-md-4">
                        <img src="{{asset('img/slogan.png')}}" class="imagencentro" width="220" height="70">
                </div>
            </div>
                <div class="titulo">
                        <h2><strong> Sistema de Control AMA</strong></h2>
                </div>
<div class="login-box">
    <div class="login-logo">

    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Autenticarse para iniciar la sesión</p>
        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Contaseña" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
               <div class="col-xs-4">
                     <div class="checkbox icheck">
                            <a href="http://localhost:8000/admin/login">
                            <!--<button class="btn btn-block btn-link">Acceso Admin</button>-->
                        </a>
                    </div>
                </div>
                <div class="col-xs-4">
                 <!-- /.col -->
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

       <!--<a href="{{ url('/password/reset') }}">
            Olvidé mi contraseña</a><br>-->
       <!-- <a href="{{ url('/register') }}" class="text-center">
            Registrese comentado</a>-->

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
