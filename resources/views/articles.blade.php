@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    <main class="articles">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="general_heading_articles">
                    <h2 class="heading">{{$text->news_heading}}</h2>
                </div>
                <div class="categories col-lg-12">
                    <div class="">
                        <a href="{{l('articles', [1, "future", $lang])}}" class="one_category @if ($category == '1')active @endif">{{$text->articles_first_catecory}}</a>
                    </div>
                    <div class="">
                        <a href="{{l('articles', [2, "current", $lang])}}" class="one_category @if ($category == '2')active @endif">{{$text->articles_second_catecory}}</a>
                    </div>
                    <div class="">
                        <a href="{{l('articles', [3, "press", $lang])}}" class="one_category @if ($category == '3')active @endif">{{$text->articles_third_catecory}}</a>
                    </div>
                    <div class="">
                        <a href="{{l('articles', [4, "social", $lang])}}" class="one_category @if ($category == '4')active @endif">{{$text->articles_fourth_catecory}}</a>
                    </div>
                </div>
                <div class="articles">
                    @if(empty($articles[0]))
                        <p class="empty">{{$text->no_articles}}</p>
                        <a class="back btn" href="#" onclick="backAway()">{{$text->back}}</a>
                    @else
                        @foreach ($articles as $article)
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
                    @endif
                </div>
                <div class="pagination_block">
                    {!! $articles->links() !!}
                </div>
            </div>
        </div>
    </main>
@endsection