$(document).ready(function() {

    var heightli = $('.menu').height();
    $('.icon-btn').click( function() {
    if($('.menu').hasClass('drop-menu') ) {


        $('.menu').animate({
            top: '-190px',
        },100, function () {

            $('.menu').removeClass('drop-menu');

    });

     


} else {


    $('.menu').addClass('drop-menu');
    $('.menu').animate({
    top: '0px',

    },100);


    
}
});
    $('.aca-content').click(function() {

        $('.menu').animate({
            top: '-190px',
        },100, function () {

            $('.menu').removeClass('drop-menu');

        });
        


    });

 });