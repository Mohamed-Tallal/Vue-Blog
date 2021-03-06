<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

        <title> Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('dashboard_files/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/templatemo-stand-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/owl.css') }}">

    </head>
    <body>

<div id="vueId">

            <my-header></my-header>
        <!-- Page Content -->

</div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('dashboard_files/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('dashboard_files/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('dashboard_files/assets/js/custom.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/owl.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/slick.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/js/accordions.js') }}"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    </body>
</html>
