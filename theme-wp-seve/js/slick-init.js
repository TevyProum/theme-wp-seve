jQuery(document).ready(function($){
  $('.single-item').slick({
    fade: true,
    infinite: true,
    autoplay: true,
  });

  $('.other-products').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
    });

   $('.atelier-slide').slick({
     infinite: true,
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000,
     arrows: true,
     responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
       {
         breakpoint: 480,
         settings: {
           autoplay: false,
           slidesToShow: 1,
           slidesToScroll: 1,
         }
       }
     ]
     });

     $('.association-slide').slick({
       infinite: true,
       slidesToShow: 3,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 2000,
       arrows: true,
       centerMode: true,
       responsive: [
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1,
           }
         }
       ]
       });

   $('.slider').slick({
     infinite: true,
     autoplay: true,
     slidesToShow: 4,
     rows: 2,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 2,
           rows: 1,
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 2,
           rows: 1,
         }
       },
     ]
  }); 

  $(window).on('load resize orientationchange', function() {
    $('.slide-equipe').each(function(){
        var $carousel = $(this);
        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }
        else{
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    mobileFirst: true,
                    autoplay: true,
                });
            }
        }
    });
  });
});