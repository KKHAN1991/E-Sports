/**
 * Created by khan on 02/12/14.
 */

(function($) {

    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
    var pageDiv = $('#page');
    //console.log(pageDiv);
    $('.menu-toggle').bind('click', function() {
        pageDiv.toggleClass('menu-open');
        return false;
    });
})(jQuery);


