<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+9194614720&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <a href="#"
        class="floatfb" target="_blank">
        <i class="fa fa-facebook my-float"></i>
    </a>
<script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>


<!-- script for portfolio section using hoverdirection -->
<script type="text/javascript">
$(function() {

    $('.portfolio-item > .item-image').each(function() {
        $(this).hoverdir({
            hoverDelay: 75
        });
    });

});
</script>


<!-- script for twitter-feed using owl carousel-->
<script type="text/javascript">
$(document).ready(function() {

    $("#twit").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 100,
        paginationSpeed: 400,
        navigationText: false,
        singleItem: true,
        autoPlay: true,
        pagination: false
    });

});
</script>


<!-- script for testimonial section using owl carousel -->
<script type="text/javascript">
$(document).ready(function() {

    $("#client-speech").owlCarousel({

        autoPlay: 5000, //Set AutoPlay to 3 seconds
        stopOnHover: true,
        singleItem: true
    });

});
</script>