$(document).ready(function (){
    var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2500,
        wrap: true
    })

    $('#navbarDropdown').on('click', function(){
        $(".dropdown-menu").toggle();
    })


});
