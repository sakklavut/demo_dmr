<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/full_car.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="OwlCarousel2/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function(){
    $('#exampleModal').modal('show');
})
</script>
       
		<script src='calendar/lib/moment.min.js'></script>
		<script src='calendar/fullcalendar.min.js'></script>
</body>
</html>