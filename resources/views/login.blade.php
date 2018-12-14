<!DOCTYPE html>
<html>

<!-- Mirrored from dreamguys.co.in/smarthr/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Sep 2018 08:40:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Login - HRMS admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title">Management Login</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <div class="account-logo">
                        <a href="#"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
                        @include('admin.layouts._validation_messages')
                        @include('admin.layouts._messages')
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group form-focus">
                            <label class="control-label">Username or Email</label>
                            <input name="email" class="form-control floating" type="email">
                        </div>
                        <div class="form-group form-focus">
                            <label class="control-label">Password</label>
                            <input name="password" class="form-control floating" type="password">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                        </div>
                        <div class="text-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</body>

<!-- Mirrored from dreamguys.co.in/smarthr/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Sep 2018 08:40:55 GMT -->
</html>