	<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>@yield('Pagelink')</h2>
							<ul class="bread-list">
								<li><a href="{{route('home')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">@yield('Pagelink')</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>