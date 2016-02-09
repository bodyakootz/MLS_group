@extends('layouts/layout')
@extends('/partials/header')
@extends('/partials/navbar')
@extends('/partials/footer')

@section('body')
    <main class="service">
        <div class="container">
            <div class="main_content col-lg-12">
                <div class="general_heading_articles">
                    <h2 class="heading">{{$text->service_heading}}</h2>
                </div>
                <div class="content col-lg-12">
                    <div class="general_heading">
                        <h2 class="heading">{{$service->title}}</h2>
                    </div>
                    <div class="short_description">
                        <div class="icon"></div>
                        <div class="text">
                            <p>{!!$service->small_description_text!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full_description_wrap @if ($service_name === 'law') law @endif">
            <div class="container">
                <div class="full_description">
                    @if ($service_name === 'marketing')
                        @include ('/partials/marketing_service')
                    @elseif ($service_name === 'law')
                        @include ('/partials/law_service_alt')
                    @elseif ($service_name === 'social')
                        @include ('/partials/social_service')
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
@section ('js') 
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