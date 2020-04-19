<script>
    $.vegas('slideshow', {
      delay:5000,
      backgrounds:[
         { src:'img/nature1.jpg', fade:2000 },
         { src:'img/bw1.jpg', fade:2000 },
        { src:'img/portrait1.jpg', fade:2000 },
         { src:'img/portrait5.jpg', fade:2000 },
        { src:'img/portrait2.jpg', fade:2000 },
        { src:'img/portrait3.jpg', fade:2000 },
         { src:'img/portrait4.jpg', fade:2000 },
           { src:'img/forest.jpg', fade:2000 }
           
      ]
    })('overlay', {
    src:'img/overlay.png'
    });
    
        </script>
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