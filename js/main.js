


let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');
let navBarToggle1 = document.getElementById('js-navbar-toggle1');
let navBarToggle2 = document.getElementById('js-navbar-toggle2');
let navBarToggle3 = document.getElementById('js-navbar-toggle3');

navBarToggle.addEventListener('click', function () {

    mainNav.classList.toggle('active');
});

navBarToggle1.addEventListener('click', function () {

    mainNav.classList.toggle('active');
});

navBarToggle2.addEventListener('click', function () {

    mainNav.classList.toggle('active');
});

navBarToggle3.addEventListener('click', function () {

    mainNav.classList.toggle('active');
});


(function($){

    $.fn.autoResize = function(options) {

        // Just some abstracted details,
        // to make plugin users happy:
        var settings = $.extend({
            onResize : function(){},
            animate : true,
            animateDuration : 150,
            animateCallback : function(){},
            extraSpace : 20,
            limit: 1000
        }, options);

        // Only textarea's auto-resize:
        this.filter('textarea').each(function(){

                // Get rid of scrollbars and disable WebKit resizing:
            var textarea = $(this).css({resize:'none','overflow-y':'hidden'}),

                // Cache original height, for use later:
                origHeight = textarea.height(),

                // Need clone of textarea, hidden off screen:
                clone = (function(){

                    // Properties which may effect space taken up by chracters:
                    var props = ['height','width','lineHeight','textDecoration','letterSpacing'],
                        propOb = {};

                    // Create object of styles to apply:
                    $.each(props, function(i, prop){
                        propOb[prop] = textarea.css(prop);
                    });

                    // Clone the actual textarea removing unique properties
                    // and insert before original textarea:
                    return textarea.clone().removeAttr('id').removeAttr('name').css({
                        position: 'absolute',
                        top: 0,
                        left: -9999
                    }).css(propOb).attr('tabIndex','-1').insertBefore(textarea);

                })(),
                lastScrollTop = null,
                updateSize = function() {

                    // Prepare the clone:
                    clone.height(0).val($(this).val()).scrollTop(10000);

                    // Find the height of text:
                    var scrollTop = Math.max(clone.scrollTop(), origHeight) + settings.extraSpace,
                        toChange = $(this).add(clone);

                    // Don't do anything if scrollTip hasen't changed:
                    if (lastScrollTop === scrollTop) { return; }
                    lastScrollTop = scrollTop;

                    // Check for limit:
                    if ( scrollTop >= settings.limit ) {
                        $(this).css('overflow-y','');
                        return;
                    }
                    // Fire off callback:
                    settings.onResize.call(this);

                    // Either animate or directly apply height:
                    settings.animate && textarea.css('display') === 'block' ?
                        toChange.stop().animate({height:scrollTop}, settings.animateDuration, settings.animateCallback)
                        : toChange.height(scrollTop);
                };

            // Bind namespaced handlers to appropriate events:
            textarea
                .unbind('.dynSiz')
                .bind('keyup.dynSiz', updateSize)
                .bind('keydown.dynSiz', updateSize)
                .bind('change.dynSiz', updateSize);

        });

        // Chain:
        return this;

    };

})(jQuery);

$('textarea').autoResize();









  // Get Singletons
fetch('../cockpit/api/singletons/listSingletons?token=218c94f5cf0c24e0556665642e6fd8')
    .then(singletons => singletons.json())
    .then(singletons => console.log(singletons));

// fetch('../cockpit/api/singletons/get/HeroSection?token=215df5ae797c0d7f3d13c72c59eb8a')
//         .then(data => data.json())
//         .then(data => console.log(data));

// fetch section lingo + compute language

function fetchLingo () {

  //Section Storage

  var intro;

  //Language Array

  var arrLingo = {
    eng: {
      "intro_h2": "",
      "intro_h1": "",
      "intro_btn": ""
    },
    de: {
      "intro_h2": "",
      "intro_h1": "",
      "intro_btn": ""
    },
    it: {
      "intro_h2" : "",
      "intro_h1": "",
      "intro_btn": ""
    }
  }

  fetch('../cockpit/api/singletons/get/HeroSection?token=215df5ae797c0d7f3d13c72c59eb8a')
              .then(data => data.json())
              .then(data => {
           	intro = data;
                  logIntroBtn();
                  console.log(arrLingo);
                  arrLingo.eng.intro_h2 = intro.Heading;
                  arrLingo.de.intro_h2 = intro.Heading_de;
                  arrLingo.it.intro_h2 = intro.Heading_it;
                  arrLingo.eng.intro_h1 = intro.Subhead;
                  arrLingo.de.intro_h1 = intro.Subhead_de;
                  arrLingo.it.intro_h1 = intro.Subhead_it;
                  arrLingo.eng.intro_btn = intro.Button;
                  arrLingo.de.intro_btn = intro.Button_de;
                  arrLingo.it.intro_btn = intro.Button_it;
                  console.log(arrLingo);
                  //callback();
          });

          function logIntroBtn () {
            console.log(intro);
            console.log(intro.Button);
          }

          $(function() {
            $('.trans').click(function() {
              var lng = $(this).attr('id');

              $('.lng').each(function(index, element){
                $(this).text(arrLingo[lng][$(this).attr('key')]);
              });
            });
          });

}
//CALL LINGO FUNCTION

fetchLingo();

//Interactive Map

$(function(){
  $('.tablinks').on('click', function() {
    $('.tablinks.btnactive').removeClass('btnactive');
    $(this).addClass('btnactive');
    //Figure out which panel to Show
    var tabToShow = $(this).attr('rel');
    var svgToShow = $(this).attr('rel2');

    //Hide current panel
    $('.tabcontent.tabactive').fadeOut(500, showNextPanel);
    //Show new panel
    function showNextPanel() {
      $(this).removeClass('tabactive');

      $('#' + tabToShow).fadeIn(500, function() {

        $(this).addClass('tabactive');

      });
    }
    //Hide current SVG
    $('.tabsvg.tabactive').hide(500, function() {
      $(this).removeClass('tabactive');

      $('#' + svgToShow).show(500, function() {

        $(this).addClass('tabactive');

      });
    });

  });
});


// Waypoints

$(document).ready(function(){

  // hide our element on page load
  $('#about-waypoint').css('opacity', 0);
  $('#about-waypoint2').css('opacity', 0);
  $('#interact-waypoint').css('opacity', 0);

  var aboutWaypoint = new Waypoint({
    element: document.getElementById('about-waypoint'),
    handler: function() {
      $('#about-waypoint').addClass('animate__fadeInLeft');
      console.log('triggered');
    },  offset: '75%'
  })

    var aboutWaypoint2 = new Waypoint({
      element: document.getElementById('about-waypoint2'),
      handler: function() {
        $('#about-waypoint2').addClass('animate__fadeInRight');
        console.log('triggered');
      },  offset: '75%'
    })

    var interactWaypoint = new Waypoint({
      element: document.getElementById('interact-waypoint'),
      handler: function() {
        $('#interact-waypoint').addClass('animate__fadeIn');
        console.log('triggered');
      },  offset: '25%'
    })
});

// SmoothScroll

$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
