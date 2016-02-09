@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    <main class="services">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="general_heading_articles">
                    <h2 class="heading">{{$text->services_heading}}</h2>
                </div>
                <div class="services_blcok col-lg-12">
                    <ul class="nav nav-tabs">
                        <li class="col-lg-4 active">
                            <div role="presentation" class="one_service marketing">
                                <div class="content">
                                    <div class="icon"></div>
                                    <a href="#menu_1" data-toggle="tab">
                                        <p>{{$text->services_service_1_heading}}</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4">
                            <div role="presentation" class="one_service law">
                                <div class="content">
                                    <div class="icon"></div>
                                    <a href="#menu_2" data-toggle="tab">
                                       <p> {{$text->services_service_2_heading}}</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-4">
                            <div role="presentation" class="one_service social">
                                <div class="content">
                                    <div class="icon"></div>
                                    <a href="#menu_3" data-toggle="tab">
                                        <p>{{$text->services_service_3_heading}}</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab_wrap">
            <div class="container">
                <div class="tab-content col-lg-12">
                    <div id="menu_1" class="tab-pane fade in active">
                        <h3>{{$text->services_service_1_heading}}</h3>
                        <div>
                            <p>{!!$text->marketing_tab_text!!}</p>
                        </div>
                        <a href="{{l('service', ['marketing', $lang])}}" class="btn ">{{$text->services_tabs_more}} {{$text->services_service_1_heading}}</a>
                    </div>
                    <div id="menu_2" class="tab-pane fade">
                        <h3>{{$text->services_service_2_heading}}</h3>
                        <div>
                            <p>{!!$text->law_tab_text!!}</p>
                        </div>
                        <a href="{{l('service', ['law', $lang])}}" class="btn ">{{$text->services_tabs_more}} {{$text->services_service_2_heading}}</a>
                    </div>
                    <div id="menu_3" class="tab-pane fade">
                        <h3>{{$text->services_service_3_heading}}</h3>
                         <div>
                            <p>{!!$text->social_tab_text!!}</p>
                        </div>
                        <a href="{{l('service', ['social', $lang])}}" class="btn ">{{$text->services_tabs_more}} {{$text->services_service_3_heading}}</a>
                    </div>
                </div>
            </div>
        </div>    
    </main>
@endsection