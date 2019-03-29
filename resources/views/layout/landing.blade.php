<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  --}}

    <title>Succ - @yield('title')</title>

</head>
<body>

    


                @yield('content')



    @yield('script')
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
