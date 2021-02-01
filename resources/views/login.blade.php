<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
	<link rel="shortcut icon" href="dist/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo mt-5">
        <h3 class="text-monospace text-uppercase text-center text-info"><strong>THE revolutionary government of zanzibar</strong></h3>
        <h5 class="text-monospace text-capitalize text-center text-info"><strong>Disaster Management System</strong></h5>
        <div class="form-container mt-5">
            <div class="image-holder"></div>
            <form method="post" action="login.php">
                <div class="form-group"><input class="form-control" type="email" name="email" required="" placeholder="someone@egoz.go.tz"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" required="" placeholder="Password"></div>
                <div class="form-group">
                    <div class="form-check"></div>
                </div>
                <div class="form-group"><button class="btn btn-success btn-block" type="submit">Sign in</button></div><a href="https://egoz.go.tz:2096/resetpass?start=1" class="already" style="font-size:14px;text-decoration:underline;">Can't access your account?</a></form>
        </div>
        <p class="text-monospace text-center text-muted "><br /><strong>&copy; {{date('Y')}} Kamisheni ya Kukabiliana na Maafa - Haki zote zimehifadhiwa</strong><br /><br /></p></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>