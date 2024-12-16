// ==========================================================================
//  Main JavaScript 
// ==========================================================================

////////
// Sticky Header
////////

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.fake-header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the .fake-header, add class .nav-up.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.fake-header').removeClass('nav-down').addClass('nav-up');
        $('.header-placeholder').removeClass('header-show').addClass('header-hidden');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.fake-header').removeClass('nav-up').addClass('nav-down');
            $('.header-placeholder').removeClass('header-hidden').addClass('header-show');
        }
    }
    
    lastScrollTop = st;
}


////////
// Slick Carousel Plugin
////////

// Banner Carousel
$(document).ready(function(){
    $('.slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: true,
        appendDots: $('.slides'),
    });
});

// Partner Carousel
$(document).ready(function(){
    $('.partners').slick({
        slidesToShow:       3,
        slidesToScroll:     1,
        autoplay:           true,
        arrows:             false,
        infinite:           true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false,
        pauseOnHover:       true,
        pauseOnFocus:       true,
    });
});

// Case Studies Carousel
$(document).ready(function(){
     $('.case-studies').slick({
        slidesToShow:       3,
        slidesToScroll:     1,
        autoplay:           true,
        arrows:             false,
        infinite:           true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false,
        pauseOnHover:       true,
        pauseOnFocus:       true,
    });
    $('.case-studies .slick-list').addClass('slick-list-overflowremove')
 });

////////
// Side Menu
////////

// Side menu show/hide on click 

// $(function() {     
//      $('.header-icon-menu-container').on('click', function(e) {
//        e.preventDefault();
//        $('.sidebar').removeClass('hide-sidebar').addClass('active-sidebar');
//      });
//        $('.wrapper').on('click', function(e) {
//           e.preventDefault();
//            $('.sidebar').removeClass('active-sidebar').addClass('hide-sidebar');
//         });
// });

// set's variables for the sidebar and wrapper
const sideMenu = document.querySelector('.sidebar');

// Animation for the wrapper moving the page content on click of the burger menu

$(document).ready(function() {
    $('.header-icon-menu-container').click(function(e) {
      var mySideBar = $('.sidebar');
      mySideBar.addClass('active-sidebar').removeClass('hide-sidebar');
      $('.wrapper').addClass('wrapper-right').removeClass('wrapper-center');
       $(".wrapper").animate({
          right: `${sideMenu.offsetWidth}px`
       })
      $('.wrapper').click(function() {
        $('.active-sidebar').removeClass('active-sidebar');
        $('.wrapper').addClass('wrapper-center').removeClass('wrapper-right');
          $(".wrapper").animate({
              right: '0px'
           })
        $('.wrapper').off('click'); // cancel the wrappers click handler when it's used
      });
      e.stopPropagation(); 
    });
});
