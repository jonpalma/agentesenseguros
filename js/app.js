$(window).scroll(function () {
	if ($(window).scrollTop() >= '112' && !$('.navbar').hasClass('navbar-fixed-top')) {
		$('.navbar').addClass('navbar-fixed-top');
	} else if ($(window).scrollTop() < '112' && $('.navbar').hasClass('navbar-fixed-top')) {
		$('.navbar').removeClass('navbar-fixed-top');
	}
});

$(document).ready(function() {
    setBannerSize();
});

$(window).resize(function () {
    setBannerSize();
});

function setBannerSize () {
    $height = $('.banner').height();
    $('.banner .img-container').css({
        height: $height+'px'
    });
}