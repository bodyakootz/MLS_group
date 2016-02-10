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
                        <h2 class="heading">Контакты</h2>
                    </div>
                    <div class="collects col-lg-6 col-lg-offset-3">
                        @if(empty($collects[0]))
                            <p class="empty">Контактов нет:(</p>
                        @else
                            @foreach ($collects as $collect)
                                <div class="one_collect">
                                    <p class="date">{{$collect->date}}</p>
                                    <a href="mailto:{{$collect->email}}">{{$collect->email}}</a>
                                    {!!Form::open(['url'=>'/admin/delete_collect/'.$collect->id, 'method'=>'POST', 'class'=>'contact_form'])!!}
                                        <i class="fa fa-times delete_article"></i>
                                    {!!Form::close()!!}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection