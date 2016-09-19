// Partners Slider

    $(window).load(function() {
    $('.widget-four').flexslider({
        animation: "slide",
        controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: false, //Boolean: Create navigation for previous/next navigation? (true/false)
        direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
        animationLoop: true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        slideshowSpeed: 7000, //Integer: Set the speed of the slideshow cycling, in milliseconds
        initDelay: 0, //{NEW} Integer: Set an initialization delay, in milliseconds
        reverse: true, //{NEW} Boolean: Reverse the animation direction
        easing: "easeInOutQuint", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
    })
});

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/footer-widget.js"></script> 