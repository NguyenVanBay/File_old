<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('tieude')</title>
	<link rel="stylesheet" href="{{ asset('') }}">
</head>
<body>

	@include('admin.marquee', ['bien1'=> 'xin chào bạn', 'bien2' => 'xin chào anh'])

	<div class="top" style="width: 100%; height: 300px; background-color: #cddc39; color: #fff">
		phần đầu
		@yield('noidung')
	</div>


	<div class="top" style="width: 100%; height: 600px; background-color: #ef5350; color: #fff">
		@section('body')
		phần 2
		@show
	</div>


	<div class="top" style="width: 100%; height: 300px; background-color: #4dd0e1; color: #fff">
		phần 3
	</div>
	
</body>
</html>