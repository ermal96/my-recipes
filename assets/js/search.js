/**
 * search js.
 *
 */
( function($) {
   var searchToggleForm = $('#searchToggleForm');
   var searchForm = $('#searchForm');

   searchToggleForm.click(function(){
    $(this).toggleClass('fa-times');
    searchForm.toggle(100);
   })
   
} )(jQuery);
