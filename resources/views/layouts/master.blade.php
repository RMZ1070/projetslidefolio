<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Slidefolio</title>    
    <!-- Add custom CSS here -->
    <link href="css/style.css" rel="stylesheet">
    {{-- <link href="css/slidefolio.css" rel="stylesheet"> --}}
    <link href="css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>
  <body>
@yield('content')
      
    
      <script src="js/jquery.js"></script>
      <script src="js/jquery-scrolltofixed-min.js"></script>
      <script src="js/jquery.vegas.js"></script>
      <script src="js/jquery.mixitup.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/scriOur Workpt.js"></script>
      <script src="js/bootstrap.js"></script>
      
  <!-- Slideshow Background  -->
  @yield('diaporama')
      
  <!-- /Slideshow Background -->
  
  <!-- Mixitup : Grid -->
      <script>
          $(function(){
      $('#Grid').mixitup();
        });
      </script>
  <!-- /Mixitup : Grid -->	
  
      <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
      <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {
  
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
      </script>
  <!-- Navbar -->
  <script type="text/javascript">
  $(document).ready(function() {
          $('#nav').scrollToFixed();
    });
      </script>
 
</body>
</html>