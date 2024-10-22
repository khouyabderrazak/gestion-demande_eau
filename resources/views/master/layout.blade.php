<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titel')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        @yield('css')
        <link rel="stylesheet" href="/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&family=Roboto:ital,wght@0,100;0,300;0,400;1,500&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,300;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <script src="/js/jquery.js"></script>
        @yield('body')
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/all.min.js"></script>
    </body>
</html>
