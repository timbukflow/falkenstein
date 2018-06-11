$(document).ready(function () {
    
    //Dropdown Navigation
    
    $('.dropdown').mouseenter(function() {
        $(this).children('div').stop(true, false).slideDown('slow');
        $('.topnav').stop(true, false).addClass('dd-nav-footer');
    });
    
    $('.dropdown').mouseleave(function() {
        $('.dropdown-nav').stop(true, false).slideUp('slow');
        $('.topnav').stop(true, false).removeClass('dd-nav-footer');
    });
    
    //Responsive Navigation
    
    $('.menu').click(function() {
        $('.menu').hide();
        $('.topnav .navresp').css('display', 'block');
        $('.close').css('display', 'block');
    });
    
     $('.close').click(function() {
        $('.menu').show();
        $('.topnav .navresp').hide();
        $('.close').hide();
    });
    
    // Accordion
    
     $('.accTitle').click(function() {
        $accordion_line = $(this).children('span');
        $('.accTitle .line').not($accordion_line).removeClass('lineactive');
        $(this).children('span').toggleClass('lineactive');
        
        $accordion_content = $(this).next('.accList');
        $('.accList').not($accordion_content).slideUp(800);
        $accordion_content.stop(true, true).slideToggle(800);
        
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

});
