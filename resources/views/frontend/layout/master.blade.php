<!DOCTYPE html>
<html lang="zxx">
<head>
@include('frontend.layout.partials.head')
</head>
<body class="js">
{{-- 
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader --> --}}


	<!-- Header -->
	@include('frontend.layout.partials.header')
	<!--/ End Header -->
@yield('content')
	<!-- Start Footer Area -->

    @include('frontend.layout.partials.footer')
	<!-- /End Footer Area -->
@include('frontend.layout.partials.script')
</body>
</html>
