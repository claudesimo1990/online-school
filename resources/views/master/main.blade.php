<!doctype html>
<html lang="DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebDevLaravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("css/icon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    @include('includes/nav')
    <script src="{{asset("js/js.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    @include('includes/footer')
</body>
</html>
