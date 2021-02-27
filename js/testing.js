 (function ($) {
    "use strict";
    var $wn =  $(window);
    $wn.on('load',function () {
        

    /***************************************
             * footer menu accordian (@media 767)  *
             ***************************************/
            function footerAcc() {
                var $allFooterAcco = $(".foot-nav > ul");
                var $allFooterAccoItems = $(".foot-nav h3");
                if ($wn.width() < 768) {
                    $allFooterAcco.css('display', 'none');
                    $allFooterAccoItems.on("click", function () {
                        if ($(this)
                            .hasClass('open')) {
                            $(this)
                                .removeClass('open');
                            $(this)
                                .next()
                                .stop(true, false)
                                .slideUp(300);
                        } else {
                            $allFooterAcco.slideUp(300);
                            $allFooterAccoItems.removeClass('open');
                            $(this)
                                .addClass('open');
                            $(this)
                                .next()
                                .stop(true, false)
                                .slideDown(300);
                            return false;
                        }
                    });
                } else {
                    $allFooterAcco.css('display', 'block');
                    $allFooterAccoItems.off();
                }
            }
            $wn.on('resize', function () {
                    footerAcc();
                });
            footerAcc();
        
            
        });
})(jQuery);