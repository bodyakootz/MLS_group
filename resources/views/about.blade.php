@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    <main class="about">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="description">
                    <div class="text">
                        <h2 class="heading">MLS Group</h2>
                        <p>{{$text->small_description_text}}</p>
                    </div>
                </div>
                <div class="advantages col-lg-12">
                    <div class="general_heading">
                        <p class="heading">{{$text->advantages_heading}}</p>
                    </div>
                    <div class="one_advantage col-lg-3">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->first_advantage_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->first_advantage_title}}</p>
                                        <p>{{$text->first_advantage_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one_advantage col-lg-3">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->second_advantage_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->second_advantage_title}}</p>
                                        <p>{{$text->second_advantage_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one_advantage col-lg-3">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->third_advantage_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->third_advantage_title}}</p>
                                        <p>{{$text->third_advantage_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one_advantage col-lg-3">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->fourth_advantage_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->fourth_advantage_title}}</p>
                                        <p>{{$text->fourth_advantage_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="principles_wrap">
            <div class="container">
                <div class="principles">
                    <div class="general_heading">
                        <div class="heading">{{$text->principles_heading}}</div>
                        <div class="line"></div>
                    </div>
                    <div class="one_priciple col-lg-3">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->first_principle_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->first_principle_title}}</p>
                                        <p>{{$text->first_principle_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one_priciple col-lg-3 middle_principle">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->second_principle_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->second_principle_title}}</p>
                                        <p>{{$text->second_principle_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one_priciple col-lg-3 last_principle">
                        <div class="flip_container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="icon"></div>
                                    <p class="title">{{$text->third_principle_title}}</p>
                                </div>
                                <div class="back">
                                    <div class="text">
                                        <p class="heading">{{$text->third_principle_title}}</p>
                                        <p>{{$text->third_principle_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_wrap">
            <div class="container">
                <div class="map" id="map" style="width: 70%; height: 400px;"></div>
            </div>
        </div>
        <div class="forms_wrap">
            <div class="container">
                <div class="general_heading">
                    <p class="heading">{{$text->forms_heading}}</p>
                    <div class="line"></div>
                </div>
                <div class="one_form col-lg-3">
                    <div class="flip_container">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <p class="title">{{$text->first_form_title}}</p>
                            </div>
                            <div class="back">
                                <div class="text">
                                    <p class="heading">{{$text->first_form_title}}</p>
                                    <p>{{$text->first_form_text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one_form col-lg-3 middle_form">
                    <div class="flip_container">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <p class="title">{{$text->second_form_title}}</p>
                            </div>
                            <div class="back">
                                <div class="text">
                                    <p class="heading">{{$text->second_form_title}}</p>
                                    <p>{{$text->second_form_text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one_form col-lg-3 last_form">
                    <div class="flip_container">
                        <div class="flipper">
                            <div class="front">
                                <div class="icon"></div>
                                <p class="title">{{$text->third_form_title}}</p>
                            </div>
                            <div class="back">
                                <div class="text">
                                    <p class="heading">{{$text->third_form_title}}</p>
                                    <p>{{$text->third_form_text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="methods_container">
                <div class="general_heading">
                    <p class="heading">{{$text->methods_heading}}</p>
                </div>
                <div class="methods js_accordion">
                    <div class="method_group">
                        <div class="group_heading">
                            <p>{{$text->first_method_group_heading}}</p>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#1_m" class="heading js_accordion_section_title">
                                <div class="icon"></div>
                                {{$text->first_method_group_method_1_heading}}
                            </a>
                            <div class="description js_accordion_section_content" id="1_m">
                                <p>{!!$text->first_method_group_method_1_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#2_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_2_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="2_m">
                                <p>{!!$text->first_method_group_method_2_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#3_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_3_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="3_m">
                                <p>{!!$text->first_method_group_method_3_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#4_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_4_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="4_m">
                                <p>{!!$text->first_method_group_method_4_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#5_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_5_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="5_m">
                                <p>{!!$text->first_method_group_method_5_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#6_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_6_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="6_m">
                                <p>{!!$text->first_method_group_method_6_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#7_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_7_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="7_m">
                                <p>{!!$text->first_method_group_method_7_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#8_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_8_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="8_m">
                                <p>{!!$text->first_method_group_method_8_description!!}</p>
                            </div>
                        </div>
                        <div class="method js_accordion_section">
                            <a href="#9_m" class="heading js_accordion_section_title">
                                {{$text->first_method_group_method_9_heading}}
                                <div class="icon"></div>
                            </a>
                            <div class="description js_accordion_section_content" id="9_m">
                                <p>{!!$text->first_method_group_method_9_description!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="method_group">
                        <div class="group_heading">
                            <p class="long">{{$text->second_method_group_heading}}</p>
                        </div>
                        <div>
                            <div class="method js_accordion_section">
                                <a href="#2_1_m" class="heading js_accordion_section_title">
                                    {{$text->second_method_group_method_1_heading}}
                                    <div class="icon"></div>
                                </a>
                                <div class="description js_accordion_section_content" id="2_1_m">
                                    <p>{!!$text->second_method_group_method_1_description!!}</p>
                                </div>
                            </div>
                            <div class="method js_accordion_section">
                                <a href="#2_2_m" class="heading js_accordion_section_title">
                                    {{$text->second_method_group_method_2_heading}}
                                    <div class="icon"></div>
                                </a>
                                <div class="description js_accordion_section_content" id="2_2_m">
                                    <p>{!!$text->second_method_group_method_2_description!!}</p>
                                </div>
                            </div>
                            <div class="method js_accordion_section">
                                <a href="#2_3_m" class="heading js_accordion_section_title">
                                    {{$text->second_method_group_method_3_heading}}
                                    <div class="icon"></div>
                                </a>
                                <div class="description js_accordion_section_content" id="2_3_m">
                                    <p>{!!$text->second_method_group_method_3_description!!}</p>
                                </div>
                            </div>
                            <div class="method js_accordion_section">
                                <a href="#2_4_m" class="heading js_accordion_section_title">
                                    {{$text->second_method_group_method_4_heading}}
                                    <div class="icon"></div>
                                </a>
                                <div class="description js_accordion_section_content" id="2_4_m">
                                    <p>{!!$text->second_method_group_method_4_description!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section ('js')
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    {{-- // <script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/ukraineLow.js"></script> --}}
    @if ($lang === 'ua')
        {!!HTML::script('js/ukraine_ua.js') !!}
    @elseif ($lang === 'ru')
        {!!HTML::script('js/ukraine_ru.js') !!}
    @else
        {!!HTML::script('js/ukraine.js') !!}
    @endif
    <script>
        AmCharts.makeChart("map",{
            "type": "map",
            "pathToImages": "http://www.amcharts.com/lib/3/images/",
            "addClassNames": true,
            "fontSize": 13,
            "color": "#FFFFFF",
            "backgroundAlpha": 1,
            "backgroundColor": "transparent",
            "dragMap": false,
            "dataProvider": {
                "map": "ukraineLow",
                "getAreasFromMap": true,
                "images": [
                    {
                        "top": 40,
                        "left": 60,
                        "width": 80,
                        "height": 40,
                        "pixelMapperLogo": false,
                        // "imageURL": "http://pixelmap.amcharts.com/static/img/logo.svg",
                        // "url": "http://www.amcharts.com"
                    }
                ],
                "areas" : [
                    {
                        "id": "UA-23",
                        "color": "#df8745"
                    }
                ]
            },
            "balloon": {
                "horizontalPadding": 15,
                "borderAlpha": 0,
                "borderThickness": 1,
                "verticalPadding": 15
            },
            "areasSettings": {
                "color": "#7f7f7f",
                "outlineColor": "#999999",
                "rollOverOutlineColor": "#f9a15f",
                "rollOverColor": "#df8745",
                // "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": false,
                "unlistedAreasAlpha": 0,
                "unlistedAreasOutlineAlpha": 0
            },
            "imagesSettings": {
                "alpha": 1,
                "color": "rgba(129,129,129,1)",
                "outlineAlpha": 0,
                "rollOverOutlineAlpha": 0,
                "outlineColor": "rgba(80,80,80,1)",
                "rollOverBrightness": 20,
                "selectedBrightness": 20,
                "selectable": false
            },
            "linesSettings": {
                "color": "rgba(129,129,129,1)",
                "selectable": false,
                "rollOverBrightness": 20,
                "selectedBrightness": 20
            },
            "zoomControl": {
                "zoomControlEnabled": false,
                "homeButtonEnabled": false,
                "panControlEnabled": false,
                "right": 38,
                "bottom": 30,
                "minZoomLevel": 0.25,
                "gridHeight": 100,
                "gridAlpha": 0.1,
                "gridBackgroundAlpha": 0,
                "gridColor": "#FFFFFF",
                "draggerAlpha": 1,
                "buttonCornerRadius": 2
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            function close_accordion_section() {
                $('.js_accordion .js_accordion_section_title').removeClass('active');
                $('.js_accordion .js_accordion_section_content').slideUp(300).removeClass('open');
            }
         
            $('.js_accordion_section_title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');
         
                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();
         
                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.js_accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
                }
         
                e.preventDefault();
            });
        });
    </script>
@endsection
