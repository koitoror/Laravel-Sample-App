<!DOCTYPE html>
<!-- <html> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>

	<!-- <title>Vue 3 in Laravel 9 with Vite</title> -->
    <title>{{env('APP_NAME')}}</title>


</head>
<body>

	<!-- @if (Auth::check())
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => true,
            'user' => Auth::user()
        ])!!}
    </script>
    @else
        <script>
            window.Laravel = {!!json_encode([
                'isLoggedin' => false
            ])!!}
        </script>
    @endif -->

	<div id="app"></div>

	@vite('resources/js/app.js')
</body>
</html>