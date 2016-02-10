@extends('layouts/admin_layout')
@extends('admin/partials/header')
@extends('admin/partials/navbar')
@extends('admin/partials/footer')

@section('body')
    <main>
        <div class="index_inner">
            <h1 class="first_title_index">
                Выберите страницу или категорию
            </h1>
            <div class="clearfix">
                <!--one categiry-->
                <div class="select_category clearfix">
                    <div class="img_div">
                        {!!HTML::image("img/admin/Megaphone-100.png", "", ['class'=>""])!!}
                        {{--<img src="image/Megaphone-100.png" alt="to add news">--}}
                    </div>
                    <p>
                        Добавить новость
                    </p>
                    <a href="{{l('create_article')}}" class="button but_category">
                        Перейти
                    </a>
                </div><!--end of one category-->

                <!--one categiry-->
                <div class="select_category clearfix">
                    <div class="img_div">
                        {!!HTML::image("img/admin/View-Details-100.png", "", ['class'=>""])!!}
                        {{--<img src="image/Dossier-100.png" alt="catalog">--}}
                    </div>
                    <p>
                        Список новостей
                    </p>
                    <a href="{{l('admin_articles')}}" class="button but_category">
                        Перейти
                    </a>
                </div><!--end of one category-->
                <!--one categiry-->
                <div class="select_category clearfix">
                    <div class="img_div">
                        {!!HTML::image("img/admin/Open-Folder-100.png", "", ['class'=>""])!!}

                        {{--<img src="image/Open-Folder-100.png" alt="subcategories">--}}
                    </div>
                    <p>
                        Отзывы
                    </p>
                    <a href="{{l('admin_feedback')}}" class="button but_category">
                        Перейти
                    </a>
                </div><!--end of one category-->

                <!--one categiry-->
                <div class="select_category clearfix">
                    <div class="img_div">
                        {!!HTML::image("img/admin/Dossier-100.png", "", ['class'=>""])!!}

                        {{--<img src="image/Dossier-100.png" alt="catalog">--}}
                    </div>
                    <p>
                        Контакты
                    </p>
                    <a href="{{l('admin_collect')}}" class="button but_category">
                        Перейти
                    </a>
                </div><!--end of one category-->

            </div><!--end of row-->

            <div class="clearfix">
                <h1 class="support_title">
                    Дополнительная поддержка
                </h1>

                <!--one item-->
                <div class="support first_support">
                    <div class="support_img_div">
                        {!!HTML::image("img/admin/Document-100.png", "", ['class'=>"support_first_img"])!!}
                        {{--<img class="support_first_img" src="image/Document-100.png" alt="instruction">--}}
                    </div>
                    <a href="#" class="button but_support">
                        Загрузить
                    </a>
                    <p class="support_text">
                        Загрузить инструкцию по использованию данной админ панели
                    </p>
                </div><!--end of one item-->

                <!--one item-->
                <div class="support support_item">
                    <div class="support_img_div">
                        {!!HTML::image("img/admin/Assistant-100.png", "", ['class'=>"support_img"])!!}
                        {{--<img class="support_img" src="image/Assistant-100.png" alt="instruction">--}}
                    </div>
                    <a href="mailto:bodyalootz@gmail.com" class="button but_support">
                        Связаться с нами
                    </a>
                    <p class="support_text">
                        Нашли баг? Свяжитесь с нами!
                    </p>
                </div><!--end of one item-->

                <!--one item-->
                {{--<div class="support support_item">--}}
                    {{--<div class="support_img_div">--}}
                        {{--<img class="support_img" src="image/Conference-100.png" alt="instruction">--}}
                    {{--</div>--}}
                    {{--<a href="#" class="button but_support">--}}
                        {{--Действие--}}
                    {{--</a>--}}
                    {{--<p class="support_text">--}}
                        {{--Текст описывающий действие, которое необходимо выполнить--}}
                    {{--</p>--}}
                {{--</div><!--end of one item-->--}}
            {{--</div><!--end of row-->--}}
        </div><!--end of main_inner-->

        <!--SCROLL UP-->
        <div class="arrow">
            <a id="scrollUp" href="#admin_header" class="back-to-top" style="display: inline;">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </main>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>Laravel</title>--}}

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}

    {{--<style>--}}
        {{--html, body {--}}
            {{--height: 100%;--}}
        {{--}--}}

        {{--body {--}}
            {{--margin: 0;--}}
            {{--padding: 0;--}}
            {{--width: 100%;--}}
            {{--display: table;--}}
            {{--font-weight: 100;--}}
            {{--font-family: 'Lato';--}}
        {{--}--}}

        {{--.container {--}}
            {{--text-align: center;--}}
            {{--display: table-cell;--}}
            {{--vertical-align: middle;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
            {{--display: inline-block;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 96px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--<div class="content">--}}
        {{--<div class="title">This is admin Panel</div>--}}
    {{--</div>--}}
    {{--<a href="{{ url('/auth/logout') }}">Logout</a>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
