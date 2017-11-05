<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
    </head>
    <body>
     @include('includes.header')
     <div class = "container">
        @yield('signUp')
        @yield('signIn')
        @yield('textfields')
        @yield('post')
        </div> 
    </body>

</html>
