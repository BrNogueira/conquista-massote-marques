$(document).ready(function() {
    let scrollNav = function() {
        $('.navbar').css({
            backgroundColor: $(this).scrollTop() > 342 ? 'rgba(34, 157, 92, 0.7)' : 'transparent',
            marginTop: $(this).scrollTop() > 342 ? '0' : '1rem',
            height: $(this).scrollTop() > 342 ? '90px' : '90px',
        })
    }

    $(window).on('load resize scroll', scrollNav)
});