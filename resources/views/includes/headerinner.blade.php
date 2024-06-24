<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{route('home')}}"><img src="{{ asset('assets/img/logo.png') }}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="{{Request::is('home')? 'active':''}}"><a href="{{route('home')}}">{{__('messages.Home')}}<i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{route('portfolio-details')}}">{{__('messages.Portfolio-details')}}</a></li>
												</ul>
											</li>
											
											<li class="{{Request::is('doctos')? 'active':''}}"><a href="#">{{__('messages.Doctos')}} </a></li>
											<li class="{{Request::is('services')? 'active':''}}"><a href="{{route('services')}}">{{__('messages.Services')}} </a></li>
											<li class="{{Request::is('pages')? 'active':''}}"><a href="#">{{__('messages.Pages')}} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{route('error404')}}">{{__('messages.404Error')}}</a></li>
												</ul>
											</li>
											<li class="{{Request::is('blogs')? 'active':''}}"><a href="{{route('blogs')}}">{{__('messages.Blogs')}} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{route('blogDetails')}}">{{__('messages.BlogDetails')}}</a></li>
												</ul>
											</li>
											<li class="{{Request::is('contact')? 'active':''}}"><a href="{{route('contact')}}">{{__('messages.ContactUs')}}</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{route('appointment')}}" class="btn">{{__('messages.BookAppointment')}}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>