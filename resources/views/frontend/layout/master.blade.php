{{-- <!DOCTYPE html>
<html lang="id" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>{{ CRUDBooster::getSetting('judul_situs') }}::{{ $title }}</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="shortcut icon" href="https://www.thesele.co.za/uploads/files/_280xAUTO_crop_center-center/Prudential-Icon.png">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{ asset('/frontend/css/linearicons.css') }} ">
		<link rel="stylesheet" href="{{ asset('/frontend/css/font-awesome.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.css') }} ">
		<link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }} ">
		<link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }} ">							
		<link rel="stylesheet" href="{{ asset('/frontend/css/animate.min.css') }} ">
		<link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.css') }} ">			
		<link rel="stylesheet" href="{{ asset('/frontend/css/jquery-ui.css') }} ">			
		<link rel="stylesheet" href="{{ asset('/frontend/css/main.css') }} ">
	</head>
	<body>	
	   @include('frontend.layout.includes._header')

		<!-- Start content Area -->
		@yield('content')
		<!-- End content Area -->	

		<!-- start footer Area -->		
		@include('frontend.layout.includes._footer')
		<!-- End footer Area -->	


		<script src="{{ asset('/frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{ asset('/frontend/js/vendor/bootstrap.min.js') }}"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA">
		</script>
		<script src="{{ asset('/frontend/js/easing.min.js') }}"></script>			
		<script src="{{ asset('/frontend/js/hoverIntent.js') }}"></script>
		<script src="{{ asset('/frontend/js/superfish.min.js') }}"></script>	
		<script src="{{ asset('/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}"></script>	
		<script src="{{ asset('/frontend/js/jquery.tabs.min.js') }}"></script>						
		<script src="{{ asset('/frontend/js/jquery.nice-select.min.js') }}"></script>	
		<script src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>									
		<script src="{{ asset('/frontend/js/mail-script.js') }}"></script>	
		<script src="{{ asset('/frontend/js/main.js') }}"></script>	
	</body>
</html> --}}


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate App</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('frontend.layout.includes.header')    
    
    @yield('content')

    @include('frontend.layout.includes.footer') 
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>