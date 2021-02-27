/*new*/
(function($) { 
	"use strict";

	/* JavaScript Document */
jQuery(document).ready(function() {
    'use strict';
	/*adding new line*/
	 var $element = $('.banner-slider');
            if ($element.length > 0) {
                $element.bxSlider({
                    controls: false,
                    auto: true,
                    mode: 'fade',
                    speed: 1000,
                    touchEnabled: false,
                });
            }
            /*why choose counter*/
            var $element = $('.counter');
            if ($element.length > 0) {
                $element.counterUp({
                    delay: 10,
                    time: 1000
                });
            }
             /***************************
             *   Testimonial Carousel  *
             ***************************/
            var $element = $('.testimonial-slide');
            if ($element.length > 0) {
                $element.bxSlider({
                    controls: false,
                    auto: true,
					speed: 2000,
                    pagerCustom: '#bx-pager'
                });
            }
           
            /*popup window*/
            function openColorBox(){
        $.colorbox({iframe:true, width:"80%", height:"80%", href: "popup.php"});
      }
      
      function countDown(){
        seconds--
        $("#seconds").text(seconds);
        if (seconds === 0){
          openColorBox();
          clearInterval(i);
        }
      }

      var seconds = 5,
          i = setInterval(countDown, 1000);
	/*till here if any thnigs goes wrong chnage here*/
	/* image-carousel no margin function by = owl.carousel.js *
	jQuery('.owl-slider').owlCarousel({
		loop:true,
		autoplay:true,
		responsive:true,
		margin:10,
		nav:false,
		dots: false,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			1024:{
				items:1
			},
			1200:{
				items:1
			}
		}
	})
	
		/* image-carousel no margin function by = owl.carousel.js *
	jQuery('.courses-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		responsive:true,
		margin:0,
		nav:false,
		dots: false,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},
			700:{
				items:3
			},			
			1024:{
				items:4
			},
			1200:{
				items:5
			}
		}
	})
	
	/* image-carousel no margin function by = owl.carousel.js *
	jQuery('.courses-carousel-2').owlCarousel({
		loop:true,
		autoplay:true,
		responsive:true,
		margin:30,
		nav:false,
		dots: false,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			1024:{
				items:3
			},
			1200:{
				items:3
			}
		}
	})
		
	/* image-carousel no margin function by = owl.carousel.js */
	jQuery('.client-carousel-3').owlCarousel({
		loop:true,
		autoplay:true,
		responsive:true,
		margin:0,
		nav:false,
		dots: false,
		autoplaySpeed: 1000,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			1024:{
				items:2
			},
			1200:{
				items:2
			}
		}
	})	
		/***********************
             *   Cources Carousel  *
             ***********************/
            var $element = $('.our-cources .owl-carousel');
            if ($element.length > 0) {
                $element.owlCarousel({
                    loop: true,
                    margin: 30,
                    navText: ['', ''],
                    nav: true,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },

                        480: {
                            items: 2,
                            margin: 20
                        },

                        768: {
                            items: 3,
                            margin: 20
                        },

                        1024: {
                            items: 4,
                            margin: 0
                        },
                    }
                });
            }


		
	/*  Blog post Carousel function by = owl.carousel.js *
	jQuery('.blog-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		nav:true,
		dots: false,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		paginationSpeed: 1000,
		slideSpeed: 1000,
		navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			991:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js *
	jQuery('.gallery-carousel').owlCarousel({
		loop:false,
		autoplay:true,
		margin:30,
		nav:true,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		paginationSpeed: 1000,
		slideSpeed: 1000,
		dots: false,
		navText: ['', ''],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			991:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js *
	jQuery('.team-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		nav:true,
		autoplaySpeed: 1000,
		navSpeed: 1000,
		paginationSpeed: 1000,
		slideSpeed: 1000,
		dots: false,
		navText: ['', ''],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			991:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js *
	jQuery('.client-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		margin:0,
		nav:true,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		dots: false,
		navText: ['', ''],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			991:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.client-carousel-2').owlCarousel({
		loop:true,
		autoplay:true,
		margin:0,
		nav:true,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		dots: false,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			991:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
		/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.client-logo-bx').owlCarousel({
		loop:true,
		autoplay:true,
		responsive:true,
		margin:30,
		nav:false,
		dots: false,
		autoplaySpeed: 1500,
		navSpeed: 1500,
		paginationSpeed: 1500,
		slideSpeed: 1500,
		navText: ['<i class="la la-arrow-left"></i>', '<i class="la la-arrow-right"></i>'],
		responsive:{
			0:{
				items:2
			},
			480:{
				items:4
			},			
			991:{
				items:5
			},
			1000:{
				items:6
			}
		}
	})
	
});
/* Document .ready END */

	
})(jQuery);	