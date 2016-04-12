jQuery(document).ready(function () {
    function htmSlider() {

        var slideWrap = jQuery('.slide-wrap');
        var nextLink = jQuery('.next-slide');
        var prevLink = jQuery('.prev-slide');

        var is_animate = false;

        var slideWidth = jQuery('.slide-item').outerWidth();

        var newLeftPos = slideWrap.position().left - slideWidth;

        nextLink.click(function () {
            if (!slideWrap.is(':animated')) {

                slideWrap.animate({ left: newLeftPos }, 500, function () {
                    slideWrap
						.find('.slide-item:first')
						.appendTo(slideWrap)
						.parent()
						.css({ 'left': 0 });
                });

            }
        });

        prevLink.click(function () {
            if (!slideWrap.is(':animated')) {

                slideWrap
					.css({ 'left': newLeftPos })
					.find('.slide-item:last')
					.prependTo(slideWrap)
					.parent()
					.animate({ left: 0 }, 500);

            }
        });
    }

    htmSlider();

    //$(".slide-item img").hover(function () {
    //    $(this).parent().parent().css("z-index", 3);
    //    $(this).animate({
    //        height: "300",
    //        width: "300",
    //        left: "-=50",
    //        top: "-=50"
    //    }, "fast");

    //}, function () {
    //    $(this).parent().parent().css("z-index", 0);
    //    $(this).animate({
    //        height: "200",
    //        width: "200",
    //        left: "+=50",
    //        top: "+=50"
    //    }, "fast");
    //});
});