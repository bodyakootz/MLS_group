@extends('layouts/admin_layout')
@extends('admin/partials/header')
@extends('admin/partials/navbar')
@extends('admin/partials/footer')

@section('body')
    <main class="articles">
        <div class="index_inner">
            <div class="container">
                <div class="main_content col-lg-12">
                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>{!! session()->get('message') !!}</p>
                        </div>
                    @endif
                    <div class="general_heading_articles col-lg-offset-3">
                        <h2 class="heading">Сообщения</h2>
                    </div>
                    <div class="collects col-lg-6 col-lg-offset-3">
                        @if(empty($feedbacks[0]))
                            <p class="empty">Сообщений нет:(</p>
                        @else
                            @foreach ($feedbacks as $feedback)
                                <div class="one_collect">
                                    <div class="heading">
                                        <p class="date">{{$feedback->date}}</p>
                                        {!!Form::open(['url'=>'/admin/delete_feedback/'.$feedback->feedback_id, 'method'=>'POST', 'class'=>'contact_form'])!!}
                                        <i class="fa fa-times delete_article"></i>
                                        {!!Form::close()!!}
                                        <p>от &nbsp;&nbsp;{{$feedback->name}}</p>
                                    </div>
                                    <div class="body">
                                        <div class="response_block">
                                            <p class="response_to">Ответить</p>
                                            <a href="mailto:{{$feedback->email}}" class="response">{{$feedback->email}}</a>
                                        </div>
                                        <p class="message">{{$feedback->message}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection