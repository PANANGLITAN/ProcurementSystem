<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
       
        <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">

        
    </head>
    <body>
    	
     <div class = "container">
      @yield('signUp')
           @yield('signIn')
        @yield('textfields')
        

        </div> 
    </body>

</html>
