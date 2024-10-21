/**
 * @file
 * Global utilities.
 *
 */
 (function ($, Drupal, once) {

  'use strict';

  Drupal.behaviors.agency_pro = {
    attach: function (context, settings) {
      $(document).ready(function () { 

         $("#page-loader").delay(3000).fadeOut(500);
        $(".dropdown-menu a.drop-toggle").click(function () {
          $(this).parent("ul").toggleClass("show");
        });
        $('#Check1').click(function(){
          if($(this).is(":checked")){
          $('.header_type .navbar-wrapper').addClass('navigation-sticky');
          $('.header_type .navbar-wrapper').addClass('responsive-sticky');
          $('#main').addClass('responsive-sticky');

          }
          else if($(this).is(":not(:checked)")){
          $('.header_type .navbar-wrapper').removeClass('navigation-sticky');
          $('.header_type .navbar-wrapper').removeClass('header-fixed');
          $('#main').removeClass('responsive-sticky');
          }
        });
       
        $(function () {
          $(document).scroll(function () {
            var $nav = $("#header-1 .navigation-sticky");
            var $na = $("#main");
            var $height = $("#header-1 .navbar-wrapper");
            $nav.toggleClass("header-fixed", $(this).scrollTop() > $height.height());
            $na.toggleClass("header-fixed", $(this).scrollTop() > $height.height());
          });
        });
        $(function () {
          $(document).scroll(function () {
            var $nav = $("#header-2 .navigation-sticky");
            $nav.toggleClass("header-fixed", $(this).scrollTop() > 20);
          });
        });
        $(function () {
          $(document).scroll(function () {
            var $na = $("#main");
            var $nav = $("#header-3 .navigation-sticky");
            $na.toggleClass("header-fixed", $(this).scrollTop() > 0);
            $nav.toggleClass("header-fixed", $(this).scrollTop() > 0);
          });
        });
      });
      // HEADER SMOOTH HEIGHT
      // $(function() {
      //   window.onload = function(){
      //   ($('#main.responsive-sticky.header-fixed').css('padding-top',$('.navbar-wrapper').height()))
      //   }
      //  });

       
      // search form
      $(function(){
        $(".search-btn .btn").click(function(){
          // $(".search-btn .search-overlay").removeClass("search-block");
          $(".search-btn .search-overlay").toggleClass("search-block");
        });
      });
      // $(".hamburger-btn").click(function(){
      //   $(".hamburger-menu").toggleClass("hamburger-block");
      // });
      /*====================================
        Search Jquery JS
      ======================================*/ 	
      $(document).ready(function(){
        $(".header-search-btn .btn").on("click", function(){
          $(".agency-search-form").toggleClass(" active ");
          $(".header-search-btn").toggleClass("form-active");
        });
      });
      // LANGUAGE DROPDOWN JQUERY
      // $(document).ready(function(){
      //   $("#navbarLanguageDropdown").on("click", function(){
      //     $(".language-drop-down").toggleClass(" active ");
      //     $("#navbarLanguageDropdown").toggleClass('show');
      //   });
      //   $(".language-switcher-language-url").hover(function(){
      //     $(".language-drop-down").toggleClass(" hover-active ");
      //     $("#navbarLanguageDropdown").toggleClass('hover');
      //   });
      // });
      // var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
      // var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
      //   return new bootstrap.Offcanvas(offcanvasEl)
      // })
      // DROPDOWN MENU
      $(".dropdown-menu a.drop-toggle").on("click", function (e) {
        if (!$(this).next().hasClass("show")) {
          $(this)
            .parents(".dropdown-menu")
            .first()
            .find(".show")
            .removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass("show");
        $(this).parent("li").toggleClass("show");
        $(this)
          .parents("li.nav-item.dropdown.show")
          .on("hidden.bs.dropdown", function (e) {
            $(".dropdown-menu .show").removeClass("show");
          });
        return false;
      }); 
       // Back to top
       $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    $('.scroll-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 0);
        return false;
    });
      // Owl Carousel
      $(function () {
        $(".home-sliding-1").owlCarousel({
          autoplay: true,
          // autoplayTimeout: 5000,
          autoplayHoverPause: true,
          loop: true,
          nav: false,
          margin: 0,
          dots: true,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            1000: {
              items: 1,
            },
          },
        });
        var owl = $(".home-sliding-1");
        owl.owlCarousel();
        $(".home-banner-1 .next").click(function () {
          owl.trigger("next.owl.carousel");
        });
        $(".home-banner-1 .prev").click(function () {
          owl.trigger("prev.owl.carousel");
        });
      });
      $(".style-1-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 30,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 4,
          },
        },
      });
      $(function(){
        $(".style-2-carousel").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          loop: true,
          nav: false,
          margin: 30,
          dots: true,
          responsiveClass: true,
          responsive: {
            0: {
              dotsEach: 3,
              items: 1,
            },
            600: {
              dotsEach: 3,
              items: 1,
            },
            1000: {          
              dotsEach: 3,
              items: 1,
            },
          },
        });
      $(".owl-dot").html('<i class="far fa-dot-circle"></i>');
      })
      $(".style-3-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 70,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            dotsEach: 3,
            items: 1,
          },
          600: {
            dotsEach: 3,
            items: 1,
          },
          1000: {
            dotsEach: 3,
            items: 3,
          },
        },
      });
      $(".style-4-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 30,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            dotsEach: 3,
            items: 1,
          },
          600: {
            dotsEach: 3,
            items: 1,
          },
          1000: {
            items: 3,
            rows: 2 ,
          },
        },
      });
      $(".style-5-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 30,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
      $(".home-sliding-2").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 0,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
      $(".team-2-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 20,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            dotsEach: 3,
            items: 1,
          },
          600: {
            dotsEach: 3,
            items: 1,
          },
          1000: {
            items: 3,
          },
        },
      });
      $(".owl-dot").html('<i class="far fa-dot-circle"></i>');
        
      // ADD ACTIVE CLASS TO FIRST CHILD
      $(document).ready(function() {
        $('.carousel-item:first-child').addClass('active');
      });
      
      // PORTFOLIO
      $('.portfolio-lists .view-content').magnificPopup({
        delegate: '.magnify-popup',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1]
        }
      });
      $('.view-content .portfolio-lists').magnificPopup({
        delegate: '.magnify-popup',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1]
        }
      });
      $('.portfolio_filter').magnificPopup({
        delegate: '.magnify-popup',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1]
        }
      });

      // TESTIMONIAL SLIDER 1
      $(".testimonial-1-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 70,
        dots: true,
        responsiveClass: true,
        responsive: {
          0: {
            dotsEach: 3,
            items: 1,
          },
          600: {
            dotsEach: 3,
            items: 1,
          },
          1000: {
            dotsEach: 3,
            items: 2,
          },
        },
      });
      $(".testimonial-2-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 70,
        // dots: true['<i class="far fa-dot-circle"></i>'],
        dots:true['<i class="fa-solid fa-arrow-down-to-square"></i>'],
        responsiveClass: true,
        responsive: {
          0: {
            dotsEach: 3,
            items: 1,
          },
          600: {
            dotsEach: 3,
            items: 1,
          },
          1000: {
            items: 2,
          },
        },
      });
      $(".owl-dot").html('<i class="far fa-dot-circle"></i>');

      $(function() {
        $(".testimonial-3-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          autoplayHoverPause: true,
          loop: true,
          nav: false,
          margin: 0,
          dots: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            1000: {
              items: 1,
            },
          },
        });
        var owl = $(".testimonial-3-slider");
        owl.owlCarousel();
        $(".testimonial-3 .arrows .next").click(function () {
          owl.trigger("prev.owl.carousel");
        });
        $(".testimonial-3 .arrows .prev").click(function () {
          owl.trigger("next.owl.carousel");
        });
      });
       
      // PORTFOLIO SLIDER
      $(".portfolio-slider-2").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        nav: false,
        margin: 0,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
      var owl = $(".portfolio-slider-2");
      owl.owlCarousel();
      $(".portfolio-details-slider .next").click(function () {
        owl.trigger("prev.owl.carousel");
      });
      $(".portfolio-details-slider .prev").click(function () {
        owl.trigger("next.owl.carousel");
      });
      
      // $(document).ready(function () {
      //   var $container = $('.portfolio_filter .row').imagesLoaded( function() {
      //     $container.imagesLoaded(function () {
      //       $container.masonry();
      //     });
      //   });
      //   var $containerr = $('.portfolio-tab .portfolio-lists"').imagesLoaded( function() {
      //     $containerr.imagesLoaded(function () {
      //       $containerr.masonry();
      //     });
      //   });
      //  });
      // PORTFOLIO STYLE
      $('.portfolio-tab .portfolio-lists').masonry({
        itemSelector: '.item',
        layoutMode: 'fitRows'
      });
      $(".portfolio-tab .portfolio-lists").isotope({
        itemSelector: ".item"
      });
      // $('.portfolio-tab .portfolio_filter .row').masonry({
      //   itemSelector: '.item',
      //   layoutMode: 'fitRows'
      // });
      // $(".portfolio-tab .portfolio_filter .row").isotope({
      //   itemSelector: ".item"
      // });

      $('.portfolio-tab .portfolio_filter .row').isotope({
        itemSelector: '.item',
        masonry: {
          columnWidth: 1
        }
      });




      $(".portfolio-tab .tabs-menu ul li").click(function () {
        $(".portfolio-tab .tabs-menu ul li").removeClass("active");
        $(this).addClass("active");
        var selector;
        selector = $(this).attr("data-filter");
        $(".portfolio-tab .portfolio_filter .row").isotope({
          filter: selector,
        });
        return false;
      });
      
        $(".circle_percent").each(function() {
          var $this = $(this),
          $dataV = $this.data("percent"),
          $dataDeg = $dataV * 3.6,
          $round = $this.find(".round_per");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
        $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
        $this.prop('Counter', 0).animate({Counter: $dataV},
        {
          duration: 2000, 
          easing: 'swing', 
          step: function (now) {
                  $this.find(".percent_text").text(Math.ceil(now)+"%");
              }
          });
        if($dataV >= 51){
          $round.css("transform", "rotate(" + 360 + "deg)");
          setTimeout(function(){
            $this.addClass("percent_more");
          },1000);
          setTimeout(function(){
            $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
          },1000);
        } 
      });
        //COMING SOON
        function getTimeRemaining(endtime) {
          var t = Date.parse(settings.custom_date) - Date.parse(new Date());
          var seconds = Math.floor((t / 1000) % 60);
          var minutes = Math.floor((t / 1000 / 60) % 60);
          var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
          var days = Math.floor(t / (1000 * 60 * 60 * 24));
          return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
            };
        }
        function initializeClock(id, endtime) {
          var clock = document.getElementById(id);
          var daysSpan = clock.querySelector('.days');
          var hoursSpan = clock.querySelector('.hours');
          var minutesSpan = clock.querySelector('.minutes');
          var secondsSpan = clock.querySelector('.seconds');
          function updateClock() {
            var t = getTimeRemaining(endtime);
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            if (t.total <= 0) {
              clearInterval(timeinterval);
              document.getElementById("clockdiv").innerHTML = settings.custom_message_dateExpired;
            }
          }
          updateClock();
          var timeinterval = setInterval(updateClock, 1000);
          }
          var deadline = new Date(Date.parse(new Date()));
          if($("#clockdiv").length){
            initializeClock('clockdiv', deadline);
          }
                //Clipboard
                var clipboard = new ClipboardJS('.clipboard');

                clipboard.on('success', function(e) {
                    e.trigger.textContent = 'Copied';
                    window.setTimeout(function() {
                        e.trigger.textContent = 'Copy to Clipboard';
                    }, 8000);
                    console.log(e);
                });

                clipboard.on('error', function(e) {
                    console.log(e);
                });
                // TOOLTIP
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                  return new bootstrap.Tooltip(tooltipTriggerEl)
                })

                $(function () {
                  var setHeight =  $('.view-content .item-content').height();
                  $(".view-content .item-content .image ").css('height', setHeight + "px").css('overflow', 'hidden');
              });
              $(function () {
                for (let i = 0; i < 5; i++) {
                  var setHeight =  $('.blog-lists.'+ i +' .details').height();
                  $(".blog-lists."+ i +" img ").css('height', setHeight + "px").css('overflow', 'hidden');
                }
              });
              $(function () {
                for (let i = 0; i < 10; i++) {
                  var setHeight =  $('.item.'+ i ).height();
                  $(".item."+ i +" .image ").css('height', setHeight + "px").css('overflow', 'hidden');
                }
              });

              $("#section-navigator-down").on("click" ,function(){
                window.scrollBy(0,700);
              });



        $(window).on('load',function(){
          var url = window.location.href;
          if (url.indexOf('#') > -1){
            var hash = url.substring(url.indexOf('#')+1);
            var elementIdToScroll = '#' + hash;
            if ($(elementIdToScroll).length > 0) {
              var top = $(elementIdToScroll).offset().top - 100;
              if($('body').hasClass('user-logged-in')){
                top -= 85;
              }
              $('html,body').animate({scrollTop: top},'slow');
            }
          }
        });
        $(function(){
          $("#block-quicklinks ul li a").removeAttr("link_type");
          $("#block-services ul li a").removeAttr("link_type");
          $("#block-footerform form input").removeAttr("data-drupal-selector");
         
        });

        $(document).ready(function(){
          $('#Check1').click(function(){
            if($(this).is(":checked")){
              $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
                if (scroll >114) {
                  $(".header-1 .home-banner-1").addClass("header-fixed");
                }
                else {
                  $(".header-1 .home-banner-1").removeClass("header-fixed");
                }
                if (scroll >72) {
                  $(".header-2 .home-banner-1").addClass("header-fixed");
                }
                else {
                  $(".header-2 .home-banner-1").removeClass("header-fixed");
                }
                if (scroll >0) {
                  $(".header-3 .home-banner-1").addClass("header-fixed");
                }
                else {
                  $(".header-3 .home-banner-1").removeClass("header-fixed");
                }
              }); 
            }
          });
        });


      $(window).on('load',function(){
        const els = document.querySelector(".career-page .accordion.opening-lists .modal .error");
        if(els){
          var myModal = new bootstrap.Modal(document.getElementById($(els).closest('.modal').attr('id')), {
            keyboard: false
          })
          myModal.show()
        }
      });

      // Comment Form Validation
      function validate(){
        var cnv = $('form.comment-form textarea').val();
        if (!$.trim(cnv)) {
          $(once('validation', 'form.comment-form textarea')).after('<span class="error-comment">* Add Comment before Submission</span>');
            return false;
        } else { return true; }
      }
      $(once('comment-validation', 'form.comment-form')).submit(validate);

      $( document ).ready(function() {
        AOS.init();
      });

    }
  };


})(jQuery, Drupal, once);
