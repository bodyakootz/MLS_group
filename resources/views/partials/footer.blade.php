@section ('footer')
	<footer>
		<div class="container">
			<div class="wrap col-lg-12">
				<div class="main_content ">
					<div class="description">
						<p class="heading">{{$text->footer_description_heading}}</p>
						<p class="text">{{$text->footer_description}}</p>
						<div class="copy">
							<p>&copy; {{$text->footer_description_copyright}}</p>
							<a href="http://group.bzzz.biz.ua/" target="_blank" class="copy">bzzz! creative group</a>
						</div>
					</div>
					<div class="services">
						<p class="heading">{{$text->footer_services_heading}}</p>
						<a href="{{l('service', [s($text->footer_service_block_service_1), $lang])}}" class="one_service">{{$text->footer_first_service}}</a>
						<a href="{{l('service', [s($text->footer_service_block_service_2), $lang])}}" class="one_service">{{$text->footer_second_service}}</a>
						<a href="{{l('service', [s($text->footer_service_block_service_3), $lang])}}" class="one_service">{{$text->footer_third_service}}</a>
					</div>
					<div class="contacts">
						<p class="heading">{{$text->footer_contacts_heading}}</p>
						<p class="address">{{$text->footer_contacts_address}}:  {{$text->footer_contacts_address_val}}</p>
						<p class="tel">{{$text->footer_contacts_tel}}:  {{$text->footer_contacts_tel_val}}</p>
						{{-- <p class="email">{{$text->footer_contacts_email}}:  {{$text->footer_contacts_email_val}}</p> --}}
						<div class="icons">
							<a href="mailto:info@mlsgroup.com" class="mail">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVlJREFUSA3tlDFOw0AQRW3S0CdFqKgoiAQFd4gUkYIqF6BODoBoaOAAnCEVF7Ao0tFRAIqvQcUBzPthBjZrW1aIBU0ife3u/Jn3nVXiJNl9/vsG0qIojnmIa3Ta8sO8wbtLCMhQjloLEMuYmQIEH6BXdLHttxDDWGLmqwBBOXTRAl39NkSzxugaM99zWJqm7+xH6JCmOdp3r2lVr2Y0i0bG+hrDyGMAtRl6QgexF5/p6VvvrML7uaIKc8jgEp3Fnp/lWc/Qa+GKVx+gRhqm6ANNwkHzJuZNY8/P+PUBmGP0jI7QI7pB+t9I2qsmTz3nDg1X6tUBGA7vaYBzB92jB5P2HfN67BUyDuHmlQPUaAMreDhE/VIKawaqDKF3PYBCLTyGxmdmSyFrAdvAPSwO+Q5oA14V4gF62b2g0p370KarWMbM9JMbANDr+mRTUEP/Ev+2oWdn/8ENfAIDq6llUBlJsQAAAABJRU5ErkJggg=="/>
							</a>
							<a href=""  target="_blank" class="fb">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZlJREFUSA3tlD1LA0EQhu+CiGBhYWEhiCIYxU4Dgn9AUPGDFOofEEEbOy0FwcbK32CjhZWNpVrHQhGCX2i6BAstFETI+Qy3K8dm7rwklhl4MrMzs+/d7t7G8+qwIAiysAbHUIFPKMMDTGlSGS2p5RBYJX8Ny3ADizABc/AEk1BjbTUZJYF4L+l9yPu+f+q2UC+7OTtO9QCat+AiKo6orH4QuqAbZBWNGWIlmLezicehCN/wDm+wYOt1eyZXYcROJD6BM+izuaY8QmJDVoT4CmbtOMmn/oockYBxp5NTh+oh83bDdG+Dr84K8+v0TZt6Fb/LR/Do9setYIXGMXgxbOKjk+WrOoeSIY//PSPiZOPNduAwuSus0peBLxjV+uNWoPXG5eQStsOz1qCegWnM8VYHJpabuscey1575Gdw9r+nh7hC7UNqrqmHiMAAjbLvtr5BnEXkTgSoF3CvcC9j7JLaURg28IugWPQeFBgvpZH6jzNIfE7rAYnbI8XWFv25RUk32Z3cL5fBJDvcYlNjdG9FPGLy55ZLI/oD+I7VZwHCCnQAAAAASUVORK5CYII="/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
@endsection