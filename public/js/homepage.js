/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.c-logo-part
 */
$(document).ready(function (e) {
    $('.res-nav_click').click(function () {
        $('ul.toggle').slideToggle(600)
    });

    $(document).ready(function () {
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 0) {
                $('#header_outer').addClass('fixed');
            } else {
                $('#header_outer').removeClass('fixed');
            }
        });

    });
});

function resizeText() {
    var preferredWidth = 767;
    var displayWidth = window.innerWidth;
    var percentage = displayWidth / preferredWidth;
    var fontsizetitle = 25;
    var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
    $(".divclass").css("font-size", newFontSizeTitle)
}


$(document).ready(function (e) {
    $('#header_outer').scrollToFixed();
    $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        return false

    });

});

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();

$(window).load(function () {
    $('a').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 91
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
})

jQuery(document).ready(function ($) {
    // Portfolio Isotope
    var container = $('#portfolio-wrap');
    container.isotope({
        animationEngine: 'best-available',
        animationOptions: {
            duration: 200,
            queue: false
        },
        layoutMode: 'fitRows'
    });

    $('#filters a').click(function () {
        $('#filters a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        container.isotope({
            filter: selector
        });
        setProjects();
        return false;
    });

    function splitColumns() {
        var winWidth = $(window).width(),
                columnNumb = 1;
        if (winWidth > 1024) {
            columnNumb = 4;
        } else if (winWidth > 900) {
            columnNumb = 2;
        } else if (winWidth > 479) {
            columnNumb = 2;
        } else if (winWidth < 479) {
            columnNumb = 1;
        }

        return columnNumb;
    }

    function setColumns() {
        var winWidth = $(window).width(),
                columnNumb = splitColumns(),
                postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-item').each(function () {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container.isotope('reLayout');
    }

    container.imagesLoaded(function () {
        setColumns();
    });


    $(window).bind('resize', function () {
        setProjects();
    });

});
$(window).load(function () {
    jQuery('#all').click();
    return false;
});

$(document).on('click', '.btnSave', function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var name = $('#name').val(),
        phone = $('#phone').val(),
        email = $('#email').val(),
        message = $('#message').val();
    if (validation(name, phone, email, message)) {
        $.ajax({
            url: "contact/save",
            method: "POST",
            data: {
                name: name,
                phone: phone,
                email: email,
                message: message
            },
            dataType: "json",
            success: function (data) {
                if (data.success === true) {
                    $('#modalInfo').modal('show');
                } else {

                }
            },
            error: function (success) {

            }
        });
    }
});

function validation(name, phone, email, message) {
    clearborder();
    var result = true;
    // set border
    if (!name) {
        $('#name').css({"border": "2px solid red"});
        result = false;
    }
    if (!phone) {
        $('#phone').css({"border": "2px solid red"});
        result = false;
    }
    if (!email) {
        $('#email').css({"border": "2px solid red"});
        result = false;
    } else if (!validateEmail(email)) {
        $('#email').css({"border": "2px solid red"});
        result = false;
    }
    if (!message) {
        $('#message').css({"border": "2px solid red"});
        result = false;
    }

    // set focus
    if (!name) {
        $('#name').focus();
    } else if (!phone) {
        $('#phone').focus();
    } else if (!email) {
        $('#email').focus();
    } else if (!validateEmail(email)) {
        $('#email').focus();
    } else if (!message) {
        $('#message').focus();
    }
    return result;
}

function clearborder() {
    $('#name').removeAttr('style');
    $('#phone').removeAttr('style');
    $('#email').removeAttr('style');
    $('#message').removeAttr('style');
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
