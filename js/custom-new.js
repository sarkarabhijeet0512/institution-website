(function($) { 
    "use strict";
var empressias = function(){
    /* Search Bar ============ */
    var siteUrl = '';
    
    var screenWidth = $( window ).width();
    
    var homeSearch = function() {
        'use strict';
    }
     /* Load File ============ */
    var dzTheme = function(){
         'use strict';
        
                
        if(screenWidth <= 991 ){
            jQuery('.navbar-nav > li > a, .sub-menu > li > a').unbind().on('click', function(e){
                //e.preventDefault();
                if(jQuery(this).parent().hasClass('open'))
                {
                    jQuery(this).parent().removeClass('open');
                }
                else{
                    jQuery(this).parent().parent().find('li').removeClass('open');
                    jQuery(this).parent().addClass('open');
                }
            });
        }
        
        jQuery('.full-sidenav .navbar-nav > li > a').next('.sub-menu').slideUp();
        jQuery('.full-sidenav .sub-menu > li > a').next('.sub-menu').slideUp();
            
        jQuery('.full-sidenav .navbar-nav > li > a, .full-sidenav .sub-menu > li > a').unbind().on('click', function(e){
            jQuery('.full-sidenav .navbar-nav > li > a').not(this).next('.sub-menu').slideUp();
            jQuery(this).next('.sub-menu').toggle(500);
        });
        
        jQuery('.menu-icon').on('click',function(){
            jQuery('.menu-close,.full-sidenav').addClass('active');
        });
        jQuery('.menu-close').on('click',function(){
            jQuery('.menu-close,.full-sidenav').removeClass('active');
        });
    }
/* Header Fixed ============ */
    var headerFix = function(){
        'use strict';
        /* Main navigation fixed on top  when scroll down function custom */        
        jQuery(window).on('scroll', function () {
            if(jQuery('.sticky-header').length > 0){
                var menu = jQuery('.sticky-header');
                if ($(window).scrollTop() > menu.offset().top) {
                    menu.addClass('is-fixed');
                    $('.header-smartClass .container > .logo-header .logo').attr('src','images/logo.png');
                } else {
                    menu.removeClass('is-fixed');
                    $('.header-smartClass .container > .logo-header .logo').attr('src','error-404.html')
                }
            }
        });
        /* Main navigation fixed on top  when scroll down function custom end*/
    }
    /* Left Menu ============ */
    var handleSideBarMenu = function(){
        $('.openbtn').on('click',function(e){
            e.preventDefault();
            if($('#mySidenav').length > 0)
            {
                document.getElementById("mySidenav").style.left = "0";
            }

            if($('#mySidenav1').length > 0)
            {
                document.getElementById("mySidenav1").style.right = "0";
            }
            
        })
        
        $('.closebtn').on('click',function(e){
            e.preventDefault();
            if($('#mySidenav').length > 0)
            {
                document.getElementById("mySidenav").style.left = "-300px";
            }
            
            if($('#mySidenav1').length > 0)
            {
                document.getElementById("mySidenav1").style.right = "-820px";
            }
        })
    }
    /* BGEFFECT ============ */
    var handleBGElements = function(){
        
        if(screenWidth > 1023)
        {
            if(jQuery('.bgeffect').length)
            {
                var s = skrollr.init({
                    edgeStrategy: 'set',
                    easing: {
                        WTF: Math.random,
                        inverted: function(p) {
                            return 1-p;
                        }
                    }
                });         
            }       
        }
    }
    
    /* Left Menu ============ */
    var handleMenuPosition = function(){
        $(".header-nav li").unbind().each(function (e) {
            if ($('ul', this).length) {
                var elm = $('ul:first', this);
                var off = elm.offset();
                var l = off.left;
                var w = elm.width();
                var docH = $("body").height();
                var docW = $("body").width();

                var isEntirelyVisible = (l + w <= docW);

                if (!isEntirelyVisible) {
                    $(this).find('.sub-menu:first').addClass('left');
                } else {
                    $(this).find('.sub-menu:first').removeClass('left');
                }
            }
        });
    }  
    var splitImageAnimation = function (){
        
        $(window).on('scroll',function(){
            $('.split-box').each(function(){
                if(isScrolledIntoView($(this))){
                    $(this).addClass('split-active');
                }
            });
        });
    }
     
     /*footer-new*/
    var $wn =  $(window);
    $wn.on('load',function () {
        /*header-color chnage*/
        $(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
        $(".main-bar").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".main-bar").removeClass("active");
    }
});

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
    /*footer-new-ends*/
    
    
    /* Function ============ */
    return {
        init:function(){
            //boxHover();
            //priceslider();
            dzTheme();
            //handleResizeElement();
            //homeSearch();
            //MagnificPopup();
            //scrollTop();
            //handlePlaceholder();
            //handlePlaceholderAnimation();
            //fileInput();
            headerFix();
            //setDivHeight();
            //handleVideo();
            //handleFilterMasonary();
            //handleCountDown(WebsiteLaunchDate);
            //handleCustomScroll();
            handleSideBarMenu();
            //cartButton();
           // handleBannerResize();
            //handleResize();
            //heartBlast();
            //onePageLayout();
            //btnAware();
            splitImageAnimation();
            //jQuery('.modal').on('show.bs.modal', reposition);
            //$('[data-toggle="tooltip"]').tooltip();
            //lightGallery();
        },
        
        
        onPageloading:function(){
            //handleBGElements();
            //handleBootstrapSelect();
            //handleBootstrapTouchSpin();
            //equalHeight('.equal-wraper .equal-col');
            //counter();
            handleMenuPosition();
            //masonryBox();
        },
        
        resize:function(){
            screenWidth = $(window).width();
            dzTheme();
            //handleResizeElement();
            handleSideBarMenu();
            handleMenuPosition();
            //setDivHeight();
        }
    }
    
}();


/* Document.ready Start */  
jQuery(document).ready(function() {
  
    empressias.init();
    
    jQuery('.navicon').on('click',function(){
        $(this).toggleClass('open');
    });

    $('a[data-toggle="tab"]').on('click',function(){
        // todo remove snippet on bootstrap v4
        $('a[data-toggle="tab"]').on('click',function() {
          $($(this).attr('href')).show().addClass('show active').siblings().hide();
        })
     });
});

    /* Window Load START */
jQuery(window).on("load", function (e) {
    empressias.onPageloading();
     setTimeout(function(){
        jQuery('#loading-area').remove();
    }, 0); 
});
/*  Window Load END */
/* Window Resize START */
jQuery(window).on('resize',function () {
    'use strict'; 
    empressias.resize();
});
/*  Window Resize END */

    
})(jQuery); 