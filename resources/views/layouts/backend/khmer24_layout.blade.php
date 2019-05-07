
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
	<title>Select a Category</title>
	<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<link  href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<script src="{{asset('assets/js/plupload.full.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.chained.js')}}"></script>
	<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>	
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<link  href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
	<link  href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
	<link  href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css">
	<style type="text/css">
		body {
			min-width: 1080px;
		}
	</style>
	@stack('css')
</head>
<body>
	@include('layouts.backend.includes.khmer24_header')
	@yield('content')

	<a href="#totop" id="totop"><i class="icon-up"></i></a>

	{{-- footer --}}
		{{-- @include('products.footer') --}}
	{{-- end footer --}}
	
	<div class="fix-feedback">
		<a href="https://www.tinhtoday.com/feedback" class="btn btn-primary btn-sm">Feedback</a>
	</div>

	@stack('js')

</body>
</html>