<!doctype html>
<html class="no-js" lang="zxx">
    <head>
            @include('includes.head')
    </head>
    <body>
	
		<!-- Preloader -->
        @include('includes.preloader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.proButton')

		<!-- Header Area -->

		<header class="header" >
			<!-- Topbar -->
			@include('includes.topBar')
			<!-- End Topbar -->
			<!-- Header Inner -->
			@include('includes.headerInner')
			<!--/ End Header Inner -->
		</header>

		<!-- End Header Area -->
		
	
		<!-- Breadcrumbs -->
        @include('includes.breadCrumbs')
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
        @include('includes.contact')
		<!--/ End Contact Us -->
		
		<!-- Footer Area -->
        @include('includes.footer')
		<!--/ End Footer Area -->
		
		<!-- Footer js Area -->
		@include('includes.footerJs')
		<!--/ End Footer js Area -->
    </body>
</html>