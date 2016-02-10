<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=1200, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/layout/favicon.ico') }}">
    <title>MLS group Админ доступ</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    {!!HTML::style('css/admin/style.css') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {!!HTML::script('js/admin/arrow_up.js') !!}
    {!!HTML::script('js/admin/popup.js') !!}
    {!!HTML::script('js/admin/nav_menu.js') !!}
{{--    {!!HTML::script('js/admin/page_change.js') !!}--}}
    {{--{!!HTML::script('js/admin/slider.js') !!}--}}
    {{--    {!!HTML::script('js/admin/input.js') !!}--}}

    @yield('css')
</head>

<body>

@yield('header')
@yield('body')
@yield('footer')

{!!HTML::script('js/admin/admin.js') !!}
@yield('js')

</body>
</html>
