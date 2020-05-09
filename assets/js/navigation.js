/**
 * File navigation.js.
 *
 */
( function($) {

    var menuMobileBtnShow = $('#menuMobileBtnShow');
    var menuMobileBtnHide = $('#menuMobileBtnHide');
    var mobileMenu = $('#mobileMenu');

    menuMobileBtnShow.click(function(){
       mobileMenu.addClass('show');
    })


    menuMobileBtnHide.click(function(){
        mobileMenu.removeClass('show');
    })



} )(jQuery);
