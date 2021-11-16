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


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/templatemo-stand-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/assets/css/owl.css') }}">

    </head>
    <body style="    margin-top: -100px;">

    <!-- ***** Preloader Start ***** -->
<!-------

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    ------->
    <!-- ***** Preloader End ***** -->




        <div id="app">
            <my-header></my-header>
            <section class="blog-posts ">
                <div class="container">
                  <div class="row">
                      <router-view></router-view>
                    <side-par></side-par>
                  </div>
                </div>
              </section>
            <my-footer></my-footer>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
