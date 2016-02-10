@extends ('admin/partials/navbar')
@section('header')
	<header>
		<div id="admin_header" class="admin_header clearfix">
			<div class="left_part_header">
				<input type="checkbox" id="menuToggle">
				<label for="menuToggle" class="menu-icon">
					&#9776;
				</label>
				<h1 class="company_name">
					<a href="{{l('index')}}">
						MLS Group
					</a>
				</h1>
			</div><!--end of left part header-->

			<div class="right_part_header">
					<span>
						<i class="fa fa-external-link"></i>
					</span>
					<span class="go_to">
						<a href="{{l('index')}}">
							Перейти на mlsgroup.com
						</a>
					</span>
					<span>
						<i class="fa fa-user"></i>
					</span>
				<div class="hi dropdown clearfix">
					<a href="#" class="clearfix dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Привет, admin
							<span>
								<i class="fa fa-caret-down"></i>
							</span>
					</a>
					<ul class="to_log_out dropdown-menu" aria-labelledby="dropdownMenu1">
						<li>
							<a href="{{ url('/auth/logout') }}" id="login">
								<span>
									<i class="fa fa-sign-out"></i>
								</span>
								<span class="log_out">
									Выйти
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div><!--end of Right part header-->
		</div><!--end of Header-->
	</header>
	@yield('navbar')
@endsection