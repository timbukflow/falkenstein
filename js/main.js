$(document).ready(function () {
    
    //Dropdown Navigation
    
    $('.dropdown').mouseenter(function() {
        $(this).children('div').stop(true, true).slideDown('slow');
        $('.topnav').addClass('dd-nav-footer');
    });
    
    $('.dropdown').mouseleave(function() {
        $('.dropdown-nav').stop(true, true).slideUp('slow');
        $('.topnav').removeClass('dd-nav-footer');
    });
    
    // Accordion
    
     $('.accTitle').click(function() {
        $accordion_line = $(this).children('.line');
        $('.line').not($accordion_line).removeClass('lineactive');
        $(this).children('.line').toggleClass('lineactive');
        
        $accordion_content = $(this).next('.accList');
        $('.accList').not($accordion_content).slideUp(800);
        $accordion_content.stop(true, true).slideToggle(800);
        
        var goto = $(this).attr("data-toggle");
        if ($(goto).is(":visible")) {
            $('html,body').animate({scrollTop:$(goto).offset().top}, 1000);
        } 
    });

});
