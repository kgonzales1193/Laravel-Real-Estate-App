<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Real Estate Web and Management Dashboard">
	<meta name="author" content="iDev">
	<meta name="keywords" content="Property Management">

	<title>NexGen Realty Dashboard</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->
	{{-- Toaster Links Start --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
	{{-- Toaster Links End --}}
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">
      {{-- Side Bar --}}
      @include('admin.body.sidebar')
      {{-- Side Bar --}}
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			@include('admin.body.header')
			<!-- partial -->

      {{-- Dashboard Starts --}}
			@yield('admin')
      {{-- Dashboard Ends --}}

			<!-- partial:partials/_footer.html -->
			@include('admin.body.footer')
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('backend/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

	{{-- Toaster JS Start --}}
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type','info') }}"
	switch(type){
			case 'info':
			toastr.info(" {{ Session::get('message') }} ");
			break;

			case 'success':
			toastr.success(" {{ Session::get('message') }} ");
			break;

			case 'warning':
			toastr.warning(" {{ Session::get('message') }} ");
			break;

			case 'error':
			toastr.error(" {{ Session::get('message') }} ");
			break; 
	}
	@endif 
	</script>
	{{-- Toaster JS End --}}

</body>
</html>    