$(document).ready(function () {
    
    //Dropdown Navigation
    
    $('.dropTitle').click(function() {
        $drop_line = $(this).children('span');
        $('.dropTitle .line').not($drop_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
        
        $drop_content = $(this).next('.dropList');
        $('.dropList').not($drop_content).slideUp(800).removeClass('open');
        $drop_content.stop(true, false).slideToggle(800).toggleClass('open');
       
        if ($('.dropList').hasClass('open')) {
            $('.topnav').addClass('dd-nav-footer');
        }
        else {
            $('.topnav').removeClass('dd-nav-footer');
        }
        
    });
    
    //Responsive Navigation
    
    $('.menusmall').click(function() {
        $(this).children('span').toggleClass('lineactive');
        $('.topnav').removeClass('dd-nav-footer');
        $('.topnav .navresp').stop(true, true).toggle();

        if ($('.topnav .navresp').is(':visible')) {
            $('.topnav').addClass('dd-nav-footer-resp');
        }
        else {
            $('.topnav').removeClass('dd-nav-footer-resp');
        }
    });
    
    
    // Accordion
    
     $('.accTitle').click(function() {
        $accordion_line = $(this).children('span');
        $('.accTitle .line').not($accordion_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
        
        $accordion_content = $(this).next('.accList');
        $('.accList').not($accordion_content).slideUp(800);
        $accordion_content.stop(true, false).slideToggle(800);
        
        var goto = $(this).attr("data-toggle");
        if ($(goto).is(":visible")) {
            $('html,body').animate({scrollTop:$(goto).offset().top}, 1000);
        } 
    });
    
    // Tabs
    
    $('.tabs .tab-links a').click(function() {
        $accordion_line = $(this).children('span');
        $('span').not($accordion_line).removeClass('lineactivesub');
        $(this).children('span').addClass('lineactivesub');
        
        var currentAttrValue = $(this).attr('href');
        $('.tabs ' + currentAttrValue).show().siblings().hide();
        $(this).parent('li').addClass('active').siblings().removeClass('active');
    });

    // Story FadeIn

    
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
    
});
