$(document).ready(function () {
    
    //Dropdown Navigation
    
    $('.dropdown').mouseenter(function() {
        $(this).children('div').stop(true, true).slideDown('slow');
    });
    
    $('.dropdown').mouseleave(function() {
        $('.dropdown-nav').stop(true, true).slideUp('slow');
    });
    
    // Accordion
    
     $('.accTitle').click(function() {
        $accordion_line = $(this).children('.line');
        $('.line').not($accordion_line).removeClass('line90deg');
        $(this).children('.line').toggleClass('line90deg');
        
        $accordion_content = $(this).next('.accList');
        $('.accList').not($accordion_content).slideUp();
        $accordion_content.stop(true, true).slideToggle(400);
    });
    
    
    
    
    /*
    $('.accordionButton').click(function() {
        event.preventDefault();
        $(this).toggleClass('openred');
        $accordion_title = $(this);
        $accordion_content = $(this).next('.accordion-list');
        $('.accordion-list').not($accordion_content).slideUp();
        $('.accordion-list').not($accordion_content).prev('.accordionButton').removeClass('openred');
        $accordion_content.stop(true, true).slideToggle(400);
        if ($(this).hasClass('openred')) {
          ScrollToTop();
    }
    });

    function ScrollToTop() {
      setTimeout(function() {
        $('html, body').animate({
          scrollTop: $($accordion_title).offset().top - 20
        }, 600);
      }, 600);
    }
    */
});
