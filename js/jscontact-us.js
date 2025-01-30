// ==========================================================================
// Contact Us JavaScript
// ==========================================================================

//Out of hours IT Support Drop Down Function
$(document).ready(function() {
    $('.Ofh-button').click(function(e) {
        var oftDropDown = $('.ofh-it-support-hidden, .ofh-it-support-active');
        
        // If it's hidden, make it active, and vice versa
        if (oftDropDown.hasClass('ofh-it-support-hidden')) {
            oftDropDown.removeClass('ofh-it-support-hidden').addClass('ofh-it-support-active');
        } else if (oftDropDown.hasClass('ofh-it-support-active')) {
            oftDropDown.removeClass('ofh-it-support-active').addClass('ofh-it-support-hidden');
        }
        
        e.stopPropagation(); 
    });
});