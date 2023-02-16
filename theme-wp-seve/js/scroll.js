// listen for scroll
var positionElementInPage = $('.menu-secondaire').offset().top;
$(window).scroll(
function() {
if ($(window).scrollTop() >= positionElementInPage) {
// fixed
$('.menu-secondaire').addClass("floatable");
} else {
// relative
$('.menu-secondaire').removeClass("floatable");
}
}
);