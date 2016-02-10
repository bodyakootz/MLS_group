@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    @if (Session::has('message'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            @if(Session::get('message'))
                <p>{{$text->message_send}}</p>
            @else
                <p>{{$text->message_fail}}</p>
            @endif

        </div>
    @endif
{{--    @include('flash::message')--}}
    <main class="contacts">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="general_heading_articles">
                    <h2 class="heading">{{$text->contacts_heading}}</h2>
                </div>
                <div class="content col-lg-9">
                    <div class="one_branch marketing col-lg-12">
                        <div class="icon_wrap col-lg-2">
                            <div class="icon"></div>
                        </div>
                        <div class="text col-lg-10">
                            <p class="heading">{!!$text->social_heading!!}</p>
                            <table>
                                <tr>
                                    <td>{{$text->phone_title}}</td>
                                    <td>{{$text->social_phone}}</td>
                                </tr>
                                <tr>
                                    <td>{{$text->email_title}}</td>
                                    <td>{{$text->social_email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="one_branch law col-lg-12">
                        <div class="icon_wrap col-lg-2">
                            <div class="icon"></div>
                        </div>
                        <div class="text col-lg-10">
                            <p class="heading">{{$text->law_heading}}</p>
                            <table>
                                <tr>
                                    <td>{{$text->phone_title}}</td>
                                    <td>{{$text->law_phone_1}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{{$text->law_phone_2}}</td>
                                </tr>
                                <tr>
                                    <td>{{$text->email_title}}</td>
                                    <td>{{$text->law_email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="one_branch partners col-lg-12">
                        <div class="icon_wrap col-lg-2">
                            <div class="icon"></div>
                        </div>
                        <div class="text col-lg-10">
                            <p class="heading">{{$text->partners_heading}}</p>
                            <table>
                                <tr>
                                    <td>{{$text->phone_title}}</td>
                                    <td>{{$text->partners_phone}}</td>
                                </tr>
                                <tr>
                                    <td>{{$text->email_title}}</td>
                                    <td>{{$text->partners_email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="find_us col-lg-12">
                        <div class="general_heading">
                            <p class="heading">{{$text->contacts_find_us_heading}}</p>
                        </div>
                        <div class="adress col-lg-10 col-lg-offset-2">
                            <p class="name">{{$text->contacts_find_us_name}}</p>
                            <p class="name">{{$text->contacts_find_us_full_name}}</p>
                            <p class="street">{{$text->contacts_find_us_street}}</p>
                            <p class="city">{{$text->contacts_find_us_city}}</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-lg-3">
                    <div class="collect">
                        <div class="form collect">
                            <p class="heading">{{$text->collect_heading}}</p>
                            {!!Form::open(['url'=>'/collect', 'method'=>'POST', 'class'=>'contact_form'])!!}
                                <div class="inner_form_block">
                                    <div class="email">
                                        {!! Form::email('email', null, ['class'=>'', 'id'=>'email', 'required'=>'required'])!!}
                                        <label for="email" class="placeholder">{{$text->form_email}}</label>
                                    </div>
                                    <div class="send">
                                        {!!Form::submit($text->form_submit, ['class'=> 'btn'])!!}
                                    </div>
                                </div>
                            {!!Form::close()!!} 
                        </div>
                    </div>
                    <div class="form">
                        <p class="heading">{{$text->form_heading}}</p>
                        {!!Form::open(['url'=>'/feedback', 'method'=>'POST', 'class'=>'contact_form'])!!}
                            <div class="inner_form_block">
                                <div class="name">
                                    {!! Form::text('name', null, ['class'=>'', 'id'=>'name', 'required'=>'required'])!!}
                                    <label for="name" class="placeholder">{{$text->form_name}}</label>
                                </div>
                                <div class="email">
                                    {!! Form::email('email', null, ['class'=>'', 'id'=>'email', 'required'=>'required'])!!}
                                    <label for="email" class="placeholder">{{$text->form_email}}</label>
                                </div>
                                <div class="text_message">
                                    {!! Form::textarea('text_message', null, ['class'=>'', 'id'=>'message', 'rows'=>'8', 'required'=>'required'])!!}
                                    <label for="message" class="placeholder">{{$text->form_message}}</label>
                                </div>
                                <div class="send">
                                    {!!Form::submit($text->form_submit, ['class'=> 'btn'])!!}
                                </div>
                            </div>
                        {!!Form::close()!!} 
                    </div>
                </div>
                <div class="map col-lg-12">
                    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ3T0qlktn3EAR4GouiHppjTo&key=AIzaSyCWMR8YZI8SKp03fmvvNTOt1eYJXdSr2NI" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
