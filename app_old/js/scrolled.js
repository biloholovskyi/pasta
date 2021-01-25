let scrolled;

window.onscroll = function () {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled > 120) {
        $('.main_header').addClass('active');
    }
    if(120 > scrolled) {
        $('.main_header').removeClass('active');
    }
}


