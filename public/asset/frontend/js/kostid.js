/**
Core script to handle the entire theme and core functions
**/
var kostid = function() {

    return {

        //main function to initiate the theme
        init: function() {
        },

        // wrMetronicer function to scroll(focus) to an element
        scrollTo: function(el, offeset) {
            var pos = (el && el.size() > 0) ? el.offset().top : 0;

            if (el) {
                pos = pos + (offeset ? offeset : -1 * el.height());
            }

            $('html,body').animate({
                scrollTop: pos
            }, 'slow');
        },

        scrollTop: function() {
            kostid.scrollTo();
        },
    };

}();

$(window).scroll(function(){
    'use strict';
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});

$('a.open_close').on("click",function() {
    $('.main-menu').toggleClass('show');
    $('.layer').toggleClass('layer-is-visible');
});

$('a.show-submenu').on("click",function() {
    $(this).next().toggleClass("show_normal");
});

$('a.show-submenu-mega').on("click",function() {
    $(this).next().toggleClass("show_mega");
});

if($(window).width() <= 480){
    $('a.open_close').on("click",function() {
        $('.cmn-toggle-switch').removeClass('active')
    });
}