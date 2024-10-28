$(document).ready(function() {

$('.Drain-You').hover(
    function() {
        $(this).find('.Silver').css('transform', 'scale(1.5)');
        $(this).find('.Dumb').css('opacity', '1');
    },
    function() {
        $(this).find('.Silver').css('transform', 'scale(1)');
        $(this).find('.Dumb').css('opacity', '0');
    }
);});
