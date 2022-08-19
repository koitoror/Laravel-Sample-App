<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	
    <title>{{env('APP_NAME')}}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<!-- @vite('resources/css/app.css') -->

</head>
<body>
	<div id="app"></div>

	<!-- <script src="{{ asset('js/app.js') }}"></script> -->
	@vite('resources/js/app.js')

</body>
</html>