    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js_new/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js_new/bootstrap.js"></script>
    <script src="js_new/owl.carousel.js"></script>
    <script src="js_new/moment.min.js"></script>

    <!-- Disable Plugin
    <script src="js_new/jquery.fancybox.min.js"></script>
    <script src="js_new/crosscover.min.js"></script> -->
    
    <script>
        $(document).ready(function() {
        $("#owl-carousel1").owlCarousel({
            loop:true,
            items : 1,
            autoplay : true,
            autoplayTimeout : 10000,
            autoplaySpeed : 1500,
          //  autoHeight : true,
          //  autoWidth : true

        });
        $("#owl-carousel2").owlCarousel({
            margin:10,
         //   loop:true,
            responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    },
            stagePadding: 50,
        //    autoplay : true,
         //   autoplayTimeout : 10000,
        //    autoplaySpeed : 1500
        });
    });
    </script>  

<!-- Script snip ข่าว -->
<script>
$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);

$(document).ready(function(){
  $('.dropdown-submenu2 a.test').hover(function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

  </body>
</html>
