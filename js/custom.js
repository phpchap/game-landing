﻿$(window).load(function () {

    $("#submit").click(function () {
        $("#notify").hide();
        $("#about").append("<p>We'll let you know as soon as Ravi is ready for take off!</p>");
    });

    $('#carousel-screenshots').carousel();

    $(".carousel-nav a").click(function (e) {
        e.preventDefault();
        var index = parseInt($(this).attr('data-to'));
        $('#carousel-screenshots').carousel(index);
        var nav = $('.carousel-nav');
        var item = nav.find('a').get(index);
        nav.find('a.active').removeClass('active');
        $(item).addClass('active');
    });

    $("#carousel-screenshots").bind('slide', function (e) {
        var elements = 4; // change to the number of elements in your nav
        var nav = $('.carousel-nav');
        var index = $('#carousel-screenshots').find('.item.active').index();
        index = (index == elements - 1) ? 0 : index + 1;
        var item = nav.find('a').get(index);
        nav.find('a.active').removeClass('active');
        $(item).addClass('active');
    });
});

$('#features-tab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
})