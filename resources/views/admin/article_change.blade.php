@extends('layouts/admin_layout')
@extends('admin/partials/header')
@extends('admin/partials/navbar')
@extends('admin/partials/footer')

@section('body')
    <main class="article">
        <div class="index_inner">
            <div class="container">
                <div class="main_content col-lg-12">
                    {{--@if (Session::has('message'))--}}
                    {{--<div class="alert alert-info">--}}
                    {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                    {{--<p>{!! session()->get('message') !!}</p>--}}
                    {{--</div>--}}
                    {{--@else--}}
                    {{--<p>no</p>--}}
                    {{--@endif--}}
                    <div class="general_heading_articles">
                        <h2 class="heading">Добавить новость</h2>
                    </div>
                    <div class="form_block">
                        {!!Form::open(['url'=>'/admin/create_article/', 'method'=>'POST', 'class'=>'contact_form'])!!}
                            <div class="meta">
                                <label for="meta_title">Meta title</label>
                                <input type="text" name="meta_title" placeholder="Ввдите meta title">
                                <label for="meta_keywords">Keywords</label>
                                <input type="text" name="meta_keywords" placeholder="Ввдите ключевые слова">
                                <label for="meta_description">Meta description</label>
                                <input type="text" name="meta_description" placeholder="Ввдите описание">
                            </div>
                            <div class="options">
                                <div class="category">
                                    <select name="categoty" id="category">
                                        <option value="1">Будущие исследования</option>
                                        <option value="2">В стадии реализации</option>
                                        <option value="3">Пресс-релизы</option>
                                        <option value="4">Социальные акции</option>
                                    </select>
                                </div>
                            </div>
                            <div class="title">
                                <label for="title">Название</label>
                                <input type="text" name="title" placeholder="Введите название статьи">
                            </div>
                            <div class="text">
                                <div class="body">

                                </div>
                                <label for="title">Короткое описание</label>
                                <input type="text" name="title" placeholder="Введите короткое описание статьи">
                            </div>
                            <div class="image_block">

                            </div>
                            <div class="submit">
                                {!! Form::submit('Сохранить', ['class'=>'btn']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
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
        {{--<div class="title">This is article change</div>--}}
            {{--<a href="{{l('article', [s($article->title), $article->article_id, $article->language])}}">{{$article->title}}</a>--}}
            {{--<p>{{$article->date}}</p>--}}
            {{--<p>{{$article->body}}</p>--}}
            {{--<p>{{$article->category}}</p>--}}
            {{--<p>{{$article->preview}}</p>--}}
            {{--<p>{{$article->language}}</p>--}}
        {{--{!! Form::model($article, ['url'=>[URL::to('/admin/update_article/')], 'method'=>'POST', 'class'=>'article_update_form']) !!}--}}
         {{--{!! Form::submit('Сохранить', ['class'=>'btn admin_uni_button']) !!}--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}

{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
