<!DOCTYPE html>
<html lang="ua">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/layout/favicon.ico') }}">
        <title>MLS group</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        {!!HTML::style('css/style.css') !!}

        @yield('css')
    </head>
    <body>
        @yield('header')
        @yield('body')
        @yield('footer')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {!!HTML::script('js/script.js') !!}
        @yield('js')
    </body>
</html>
