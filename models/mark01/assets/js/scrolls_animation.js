

// BIBLIOTHEQUE JQUERY
$(function(){
    let html_body = $('html, body');
    let a_scroll_up = $(".a_scroll_up");
    let a_apropos = $(".a_apropos");

    a_scroll_up.click(function(){
        html_body.animate({
            scrollTop: html_body.offset().top
        }, 2000);
    })
    a_apropos.click(function(){
        html_body.animate({
            scrollTop: $("#apropos").offset().top
        }, 2000);
    })
})