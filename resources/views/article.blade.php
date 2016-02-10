@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    <main class="article">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="general_heading_articles">
                    <h2 class="heading">{{$text->news_heading}}</h2>
                </div>
                <div class="article col-lg-9">
                    <div class="general_heading">
                        <p class="heading">{{$article->title}}</p>
                    </div>
                    <div class="date">
                        <p>{{$article->date}}</p>
                    </div>
                    <div class="body">
                        {!!$article->body!!}
                    </div>
                </div>
                <div class="sidebar col-lg-3">
                    <p class="sidebar_heading">
                        {{$text->sidebar_heading}}
                    </p>
                    <a href="{{l('articles', [1, "future", $lang])}}" class="one_category @if ($article->category_code == '1')active @endif">{{$text->first_sidebar_category}}</a>
                    <a href="{{l('articles', [2, "current", $lang])}}" class="one_category @if ($article->category_code == '2')active @endif">{{$text->second_sidebar_category}}</a>
                    <a href="{{l('articles', [3, "press", $lang])}}" class="one_category @if ($article->category_code == '3')active @endif">{{$text->third_sidebar_category}}</a>
                    <a href="{{l('articles', [4, "social", $lang])}}" class="one_category @if ($article->category_code == '4')active @endif">{{$text->fourth_sidebar_category}}</a>
                </div>
                <div class="same_articles col-lg-12">
                    @foreach ($same_articles as $article)
                        <div class="one_new col-lg-3">
                            <div class="img_block">
                                @if (isset($article->image) && $article->image != '')
                                    {!!HTML::image("img/articles/$article->image", "$article->title")!!}
                                @else
                                    {!!HTML::image("img/articles/no_image.jpg", "$article->title")!!}
                                @endif
                            </div>
                            <div class="content">
                                <div class="heading_block">
                                    <a href="{{l('article', [$article->article_id, s($article->title), $article->lang_code])}}" class="heading">{{$article->title}}</a>
                                </div>
                                <div class="date">
                                    <p>{{$article->date}}</p>
                                </div>
                                <div class="preview">
                                    <p>{{$article->preview_text}}</p>
                                </div>
                                <div class="more">
                                    <a href="{{l('article', [$article->article_id, s($article->title), $article->lang_code])}}" class="btn">{{$text->news_block_more}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection