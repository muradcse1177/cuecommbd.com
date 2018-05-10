<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin Panel</title>
    <link rel="icon" href="back_resource/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="/back_resource/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/back_resource/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="/back_resource/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="/back_resource/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Panel</b></a>
            <small>cuecommbd.com</small>
        </div>
        <div class="card">
            <div class="body">
                    {{ Form::open(array('url' => '/api/signIn','method' => 'post')) }}
                    <div class="msg">
                        @if(isset($errorInfo))
                            <h5 style="color:red">{{$errorInfo}}</h5>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="#">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
    <script src="/back_resource/plugins/jquery/jquery.min.js"></script>
    <script src="/back_resource/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="/back_resource/plugins/node-waves/waves.js"></script>
    <script src="/back_resource/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="/back_resource/js/admin.js"></script>
    <script src="/back_resource/js/pages/examples/sign-in.js"></script>
</body>

</html>