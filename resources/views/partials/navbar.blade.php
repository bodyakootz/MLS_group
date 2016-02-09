@section('navbar')
	<nav class="navbar">
	  	<div class="container">
	  	<div class="logo">
	  		<a href="/">
	  			{!!HTML::image('img/logo.png', 'MLS group logo')!!}
	  		</a>
	  	</div>
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
	    	</div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="@if (r() === 'index') active @endif">
		        	<a href="{{l('index', [$lang])}}">{{$text->index_link}}<span class="sr-only">(current)</span></a>
		        </li>
		        <li class="@if (r() === 'about') active @endif">
		        	<a href="{{l('about', [$lang])}}">{{$text->about_link}}</a>
		        </li>
		         <li class="@if (r() === 'services' || r() === 'service') active @endif">
		        	<a href="{{l('services', [$lang])}}">{{$text->services_link}}</a>
		        </li>
		        <li class="@if (r() === 'articles' || r() === 'article') active @endif">
		        	<a href="{{l('articles', [1, 'future', $lang])}}">{{$text->news_link}}</a>
		        </li>
		        <li class="@if (r() === 'contacts') active @endif">
		        	<a href="{{l('contacts', [$lang])}}">{{$text->contacts_link}}</a>
		        </li>
		      </ul>
		      <div class="langs">
				  @if (r() === 'articles')
					  <a href="{{l(r(), [$category, $category_name, 'ua'])}}" class="@if ($lang === 'ua') active @endif">UA</a>
					  <a href="{{l(r(), [$category, $category_name, 'ru'])}}" class="@if ($lang === 'ru') active @endif">RU</a>
					  <a href="{{l(r(), [$category, $category_name, 'en'])}}" class="@if ($lang === 'en') active @endif">EN</a>
				  @elseif (r() === 'article')
					  <a href="{{l(r(), [$article->article_id, s($article->title), 'ua'])}}" class="@if ($lang === 'ua') active @endif">UA</a>
					  <a href="{{l(r(), [$article->article_id, s($article->title), 'ru'])}}" class="@if ($lang === 'ru') active @endif">RU</a>
					  <a href="{{l(r(), [$article->article_id, s($article->title), 'en'])}}" class="@if ($lang === 'en') active @endif">EN</a>
				  @else
					  <a href="{{l(r(), 'ua')}}" class="@if ($lang === 'ua') active @endif">UA</a>
					  <a href="{{l(r(), 'ru')}}" class="@if ($lang === 'ru') active @endif">RU</a>
					  <a href="{{l(r(), 'en')}}" class="@if ($lang === 'en') active @endif">EN</a>
				  @endif
		      </div>
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
@endsection