/**
 * File navigation.js.
 *
 */
( function($) {

    var menuMobileBtnShow = $('#menuMobileBtnShow');
    var menuMobileBtnHide = $('#menuMobileBtnHide');
    var mobileMenu = $('#mobileMenu');

    menuMobileBtnShow.click(function(){
       mobileMenu.slideDown();
    })


    menuMobileBtnHide.click(function(){
        mobileMenu.slideUp();
    })



} )(jQuery);
