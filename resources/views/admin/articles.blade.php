@extends('layouts/admin_layout')
@extends('admin/partials/header')
@extends('admin/partials/navbar')
@extends('admin/partials/footer')

@section('body')
    <main class="articles">
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
                        <h2 class="heading">Статьи</h2>
                    </div>
                    <div class="articles">
                        @if(empty($articles[0]))
                            <p class="empty">Статей нет:(</p>
                            <a class="back btn" href="#" onclick="backAway()">Назад</a>
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
                                            <a href="{{l('change_article', [$article->article_id, $article->lang_code])}}" class="btn">Изменить</a>
                                            {!!Form::open(['url'=>'/admin/delete_article/'.$article->article_id.'/'.$article->lang_code, 'method'=>'POST', 'class'=>'contact_form'])!!}
                                                <a href="#" class="btn delete_article">Удалить</a>
                                            {!!Form::close()!!}
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
        </div>
    </main>
@endsection