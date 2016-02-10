@extends('layouts/admin_layout')

@section('body')
    <div class="popup_backgr">
        <div class="popup_wrap">
            <div class="popup_inner clearfix">
                <div class="popup_logo">
                    {!!HTML::image("img/admin/Administrative-Tools-100.png", "Pop up logo", ['class'=>'popup_logo_img'])!!}
                    {{--<img class="popup_logo_img" src="image/Administrative-Tools-100.png" alt="Pop up logo">--}}
                    <p>
                        Добро пожаловать в админ панель сайта
                    </p>
                </div>
                <div class="popup_registr">
                    <div class="registr_arrow">
                    </div>
                    <form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{--<label class="col-md-4 control-label">E-Mail Address</label>--}}
                            {!!HTML::image("img/admin/login1.png", "login", ['class'=>'img_login1'])!!}

                            <div class="">
                                <input type="email" class="form-control" name="email" id="input_login" placeholder="Логин" value="{{ old('email') }}">


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{--<label class="col-md-4 control-label">Password</label>--}}
                            {!!HTML::image("img/admin/login2.png", "login", ['class'=>'img_login2'])!!}

                            <div class="">
                                <input type="password" class="form-control" name="password" id="input_password" placeholder="Пароль">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Войти
                                </button>
                                <p>
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Потеряли пароль?</a>
                                </p>
                            </div>
                        </div>
                    </form>
                    {{--<input type="text" id="input_login" placeholder="Логин">--}}
                    {{--{!!HTML::image("img/admin/login1.png", "login", ['class'=>'img_login1'])!!}--}}
                    {{--{!!HTML::image("img/admin/login2.png", "login", ['class'=>'img_login2'])!!}--}}
                    {{--<input type="password" id="input_password" placeholder="Пароль">--}}
                    {{--<i class="fa fa-lock"></i>--}}
                    {{--<button>--}}
                        {{--Войти--}}
                    {{--</button>--}}
                    {{--<p>--}}
                        {{--<a href="#">--}}
                            {{--Потеряли пароль?--}}
                        {{--</a>--}}
                    {{--</p>--}}
                </div>
            </div><!--end of Popup_inner-->
        </div><!--end of Popup_wrap-->
    </div><!--end of Popup_backgr-->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
