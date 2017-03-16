<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    @yield('styles')
    <title>Open POS</title>
</head>
<body>

    @yield('content')

    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/tether/dist/js/tether.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrapv4-validator.js"></script>
    <script src="js/app.js"></script>
    @yield('scripts')
</body>
</html>