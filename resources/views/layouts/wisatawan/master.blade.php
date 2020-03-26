<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.wisatawan.module.script_atas')  
    @yield('title')
    <style type="text/css">
      .kabupaten{
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
	<!-- nav -->
    @include('layouts.wisatawan.module.nav')  
    <!-- END nav -->


    @yield('content')

    @include('layouts.wisatawan.module.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('layouts.wisatawan.module.script_bawah') 
    
  </body>
</html>