@section('navbar')
	<nav class="admin_menu">
		<div class="menu_inner">
			<ul>
				<li class="first_li active">
					<a href="{{l('admin')}}">
						{!!HTML::image("img/admin/Exterior-100_sm.png", "", ['class'=>"nav_picture"])!!}
						главная
					</a>
				</li>
				{{--<li>--}}
					{{--<a href="#">--}}
						{{--{!!HTML::image("img/admin/Shopping-Cart-100_sm.png", "", ['class'=>"nav_picture"])!!}--}}

						{{--<img src="image/Shopping-Cart-100_sm.png" alt="to add product" class="nav_picture">--}}
						{{--добавить товар--}}
					{{--</a>--}}
				{{--</li>--}}
				<li class="underlined_li clearfix nav_bottom_padding">
					<a href="{{l('create_article')}}">
						{!!HTML::image("img/admin/Megaphone-100_sm.png", "", ['class'=>"nav_picture nav_picture_news"])!!}
						добавить новость
					</a>
				</li>
				<li class="nav_top_padding">
					<a href="{{l('admin_feedback')}}">
						{!!HTML::image("img/admin/Open-Folder-100_sm.png", "", ['class'=>"nav_picture nav_picture_subcat"])!!}

						отзывы
					</a>
				</li>
				<li>
					<a href="{{l('admin_collect')}}">
						{!!HTML::image("img/admin/Dossier-100_sm.png", "", ['class'=>"nav_picture nav_picture_catalog"])!!}

						контакты
					</a>
				</li>
				<li class="clearfix nav_bottom_padding">
					<a href="{{l('admin_articles')}}">
						{!!HTML::image("img/admin/View-Details-100_sm.png", "", ['class'=>"nav_picture nav_picture_list"])!!}
						список новостей
					</a>
				</li>
				{{--<li class="two_lines_li clearfix nav_top_padding nav_bottom_padding">--}}
					{{--<a href="#">--}}
						{{--{!!HTML::image("img/admin/Conference-100_sm.png", "", ['class'=>"nav_picture nav_picture_manuf"])!!}--}}

						{{--<img src="image/Conference-100_sm.png" alt="manufacturers" class="nav_picture nav_picture_manuf">--}}
						{{--производители--}}
					{{--</a>--}}
				{{--</li>--}}
			</ul>
		</div><!--end of Menu_inner-->
	</nav>
@endsection