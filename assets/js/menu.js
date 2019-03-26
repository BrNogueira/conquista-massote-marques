$(document).ready(function() {
    let scrollNav = function() {
        $('.navbar').css({
            backgroundColor: $(this).scrollTop() > 342 ? 'rgba(50, 207, 123, 0.7)' : 'transparent',
            marginTop: $(this).scrollTop() > 342 ? '0' : '1rem',
        })
    }

    $(window).on('load resize scroll', scrollNav)
});