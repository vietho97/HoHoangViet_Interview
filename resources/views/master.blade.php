<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>

    <link href="/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/theme/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <master-component></master-component>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="/theme/vendor/jquery/jquery.min.js"></script>
    <script src="/theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/theme/js/sb-admin-2.min.js"></script>
</body>

</html>
