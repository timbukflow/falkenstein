$(document).ready(function () {
    
    // Dropdown Navigation
    
    $('.dropTitle').click(function() {
        $drop_line = $(this).children('span');
        $('.dropTitle .line').not($drop_line).removeClass('lineactive');
        $($drop_line).toggleClass('lineactive');
        
        $drop_content = $(this).next('.dropList');
        $('.dropList').not($drop_content).slideUp(800);
        $drop_content.stop(true, false).slideToggle(800);
       
    });
    
    // Responsive Navigation
    
    $('.menusmall').click(function() {
        $(this).children('span').toggleClass('lineactive');
        $('.topnav .navresp').stop(true, true).toggle();
        $('body').toggleClass('noscroll');

    });
    
    // Rechtsgebite
    
    $(".rechtsgebiete").click(function() {
    $('html, body').animate({
        scrollTop: $("#rechtsgebiete").offset().top - 120
    }, 1500);
});
    
    // Accordion
    
     $('.accTitle').click(function() {
        $accordion_line = $(this).children('span');
        $('.accTitle .line').not($accordion_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
        
        $accordion_content = $(this).next('.accList');
        $('.accList').not($accordion_content).slideUp(600);
        $accordion_content.stop(true, false).slideToggle(600);
        
         setTimeout(function(){
            $('html, body').animate({scrollTop: $($accordion_line).offset().top - 240}, 600);
        }, 700);
    });
    
    // Accordion Seccond
    
     $('.accTitleSecond').click(function() {
        $accordion_line = $(this).children('span');
        $('.accTitleSecond .line').not($accordion_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
         
        
        $accordion_content = $(this).next('.accListSecond');
        $('.accListSecond').not($accordion_content).slideUp(600);
        $accordion_content.stop(true, false).slideToggle(600);
        
        setTimeout(function(){
            $('html, body').animate({scrollTop: $($accordion_content).offset().top - 130}, 600);
        }, 700);
    
    });
    
    // disclaimer
    
     $('.accfooter').click(function() {
        $accordion_line = $(this).children('span');
        $('.accfooter .line').not($accordion_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
        
        $accordion_content = $(this).next('.acclistFooter');
        $('.acclistFooter').not($accordion_content).fadeOut(600);
        $accordion_content.stop(true, false).slideToggle(600);
        
        var goto = $(this).attr("data-toggle");
        if ($(goto).is(":visible")) {
            $('html,body').animate({scrollTop:$(goto).offset().top}, 600);
        } 
    });

    // story fadeIn
    
    $(window).scroll(function() {
        $('.inview').each(function(i) {
            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ) {
                $(this).addClass('inview-fade');
            } else {
                $(this).removeClass('inview-fade');
            }
        }); 
    }).scroll();
    
    // responsive people inview change img 
  
    $(window).scroll(function() {
        $('.mobile-inview').each(function(i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ) {
                $(this).addClass('mobile-hover');
            } else {
                $(this).removeClass('mobile-hover');
            }
        }); 
    }).scroll();
    
    // weiter lesen
    
    $('.wl').click(function() {
        $(this).siblings('.wl-hidden').fadeIn();
        $(this).css("display", "none")
    });
    
    
    // adds mobile class, and mobile os to html tag
    
        var deviceAgent = navigator.userAgent.toLowerCase();
        
        if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
          $('.mobile').addClass('mobile-inview');
          $('.mobile').addClass('mobile-inview');
        }
        
        if (deviceAgent.match(/android/)) {
          $('.mobile').addClass('mobile-inview');
          $('.mobile').addClass('mobile-inview');
        }
        
        if (deviceAgent.match(/blackberry/)) {
          $('.mobile').addClass('mobile-inview');
          $('.mobile').addClass('mobile-inview');
        }
        
        if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
          $('.mobile').addClass('mobile-inview');
        }
    
});
