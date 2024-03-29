<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-2/plugins/iCheck/square/blue.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f9f9f9; /* Set a background color for the body */
            font-family: 'Source Sans Pro', sans-serif; /* Use Google font for better readability */
        }
        .login-box {
            margin-top: 80px; /* Adjust the margin for the login box */
            width: 360px; /* Set a fixed width for the login box */
            margin: 80px auto; /* Center the login box horizontally */
            padding: 20px; /* Add some padding for better spacing */
            background-color: #ffffff; /* Set a background color for the login box */
            border-radius: 10px; /* Add some border radius to make it visually appealing */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }
        .login-logo img {
            display: block;
            margin: 0 auto;
            width: 200px; /* Adjust the width of the logo */
        }
        .login-box-body {
            padding: 20px;
        }
        .form-login input[type="email"],
        .form-login input[type="password"] {
            width: 100%; /* Make input fields fill the container */
            padding: 12px; /* Add padding for better spacing */
            margin-bottom: 20px; /* Add some space between input fields */
            border: 1px solid #ccc; /* Add a border for input fields */
            border-radius: 5px; /* Add some border radius */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }
        .form-login button[type="submit"] {
            width: 100%; /* Make submit button fill the container */
            padding: 12px; /* Add padding for better spacing */
            border: none; /* Remove default button border */
            background-color: #007bff; /* Set a background color for the button */
            color: #ffffff; /* Set text color for better contrast */
            border-radius: 5px; /* Add some border radius */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
        .form-login button[type="submit"]:hover {
            background-color: #0056b3; /* Darken the background color on hover */
        }
        .help-block {
            color: #a94442; /* Set the error message color */
        }
    </style>
</head>
<body class="hold-transition login-page">
    
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url($setting->path_logo) }}" alt="logo.png">
                </a>
            </div>

            <form action="{{ route('login') }}" method="post" class="form-login">
                @csrf
                <div class="form-group has-feedback @error('email') has-error @enderror">
                    <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                        <span class="help-block">{{ $message }}</span>
                    @else
                        <span class="help-block with-errors"></span>
                    @enderror
                </div>
                <div class="form-group has-feedback @error('password') has-error @enderror">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                        <span class="help-block">{{ $message }}</span>
                    @else
                        <span class="help-block with-errors"></span>
                    @enderror
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset('AdminLTE-2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('AdminLTE-2/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- Validator -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
        $('.form-login').validator();
    </script>
</body>
</html>
