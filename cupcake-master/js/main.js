// $('.owl-carousel').owlCarousel({
//     loop: true,
//     margin: 10,
//     nav: true,
//     navText: [
//       "<i class='fa fa-caret-left'></i>",
//       "<i class='fa fa-caret-right'></i>"
//     ],
//     autoplay: true,
//     autoplayHoverPause: true,
//     responsive: {
//       0: {
//         items: 1
//       },
//       600: {
//         items: 3
//       },
//       1000: {
//         items: 5
//       }
//     }
//   })


$(document).ready(function(){
    $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });