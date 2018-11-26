$(document).ready(function(){
    // Function for navbar
    $(window).scroll(function(){
        $wScroll = $(this).scrollTop();
        if ($wScroll > 200) {
            $('.navbar').addClass('sticky-nav');
        }else {
            $('.navbar').removeClass('sticky-nav');
        }
    })
})