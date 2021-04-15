<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      @include('includes.style')

    <title>Hello, world!</title>
  </head>
  <body>
  @include('includes.navbar')
<div class="container">
  <div class="row">
    @yield('content')
    
   
  </div>
</div>
   

   @include('includes.script')
  </body>
</html>

