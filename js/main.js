$(document).ready(function () {
    
    //Dropdown Navigation
    
    $('.dropdown').mouseenter(function() {
        $(this).children('div').stop(true, true).slideDown('slow');
    });
    
    $('.dropdown').mouseleave(function() {
        $('.dropdown-nav').stop(true, true).slideUp('slow');
    });
    
    
    
});
