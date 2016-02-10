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
    <main>
    	<div class="container">
    		<div class="main_content col-lg-6">
    			<div class="about">
    				<div class="text_block">
    					<p class="heading">{{$text->about_block_heading}}</p>
    					<p>{{$text->about_block_preview}}</p>
    					<a href="{{l('about', $lang)}}">{{$text->about_block_link}} >></a>
    				</div>
    			</div>
    			<div class="latest_news">
    				<div class="general_heading">
	    				<h2 class="heading">{{$text->latest_news_block_heading}}</h2>
    				</div>
    				@foreach ($articles as $article)
	    				<div class="one_new col-lg-6">
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
		    						<a href="{{l('article', [$article->article_id, s($article->title), $article->lang_code])}}" class="btn">{{$text->latest_news_block_more}}</a>
		    					</div>
	    					</div>
	    				</div>
	    			@endforeach	
					<div class="to_news">
						<a href="{{l('articles', [1, "future", $lang])}}" class="btn">{{$text->latest_news_block_to_all}}</a>
					</div>
    			</div>
    		</div>
    		<div class="sidebar col-lg-6">
    			<div class="services">
    				<div class="general_heading">
	    				<p class="heading">{{$text->services_block_heading}}</p>
	    			</div>	
    				<div class="one_service marketing">
    					<div class="icon"></div>
    					<p class="heading">{{$text->service_block_service_1}}</p>
    					<a href="{{l('service', ['marketing', $lang])}}" class="btn">{{$text->service_block_service_more}}</a>
    				</div>
    				<div class="one_service law">
    					<div class="icon"></div>
    					<p class="heading">{{$text->service_block_service_2}}</p>
    					<a href="{{l('service', ['law', $lang])}}" class="btn">{{$text->service_block_service_more}}</a>
    				</div>
    				<div class="one_service social">
    					<div class="icon"></div>
    					<p class="heading">{{$text->service_block_service_3}}</p>
    					<a href="{{l('service', ['social', $lang])}}" class="btn">{{$text->service_block_service_more}}</a>
    				</div>
    			</div>
    			<div class="counter">
    				<p class="left">{{$text->counter_left}}</p>
    				<div class="headings">
    					<p class="days">{{$text->counter_days}}</p>
    					<p class="hours">{{$text->counter_hours}}</p>
    					<p class="minutes">{{$text->counter_minutes}}</p>
    				</div>
					<div id="countdown">
						<p class="days_num">0</p>
						<p class="hours_num">0</p>
						<p class="minutes_num">0</p>
					</div>
					<p class="target">{{$text->counter_target}}</p>
    				<p class="title">{{$counter->title}}</p>
    			</div>
    			<div class="form_block">
    				<div class="general_heading">
	    				<h2 class="heading">{{$text->form_heading}}</h2>
    				</div>
		    		<div class="form">
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
									{!! Form::textarea('text_message', null, ['class'=>'', 'id'=>'message', 'rows'=>'3', 'required'=>'required'])!!}
									<label for="message" class="placeholder">{{$text->form_message}}</label>
								</div>
		    					<div class="send">
									{!!Form::submit($text->form_submit, ['class'=> 'btn'])!!}
								</div>
		    				</div>
		    			{!!Form::close()!!}	
		    		</div>
    			</div>
    		</div>
    	</div>
    </main>
@endsection
@section('js')
	<script>
		$endDate = "{{$counter->date}}";
		CountDownTimer($endDate, 'countdown');
		// CountDownTimer($endDate, 'newcountdown');

		function CountDownTimer(dt, id) {
			var end = new Date(dt);

			var _second = 1000;
			var _minute = _second * 60;
			var _hour = _minute * 60;
			var _day = _hour * 24;
			var timer;

			function showRemaining() {
				var now = new Date();
				var distance = end - now;
				if (distance < 0) {

					clearInterval(timer);
					document.getElementById(id).innerHTML = "<p class="days_num">' + days + '</p><p class="hours_num">' + hours + '</p><p class="minutes_num">' + minutes + '</p>";

					return;
				}
				var days = Math.floor(distance / _day);
				var hours = Math.floor((distance % _day) / _hour);
				var minutes = Math.floor((distance % _hour) / _minute);
				var seconds = Math.floor((distance % _minute) / _second);

				document.getElementById(id).innerHTML = '<p class="days_num">' + days + '</p>';
				document.getElementById(id).innerHTML += '<p class="hours_num">' + hours + '</p>';
				document.getElementById(id).innerHTML += '<p class="minutes_num">' + minutes + '</p>';
			}

			timer = setInterval(showRemaining, 1000);
		}
	</script>
@endsection