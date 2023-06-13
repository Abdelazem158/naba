$(document).ready(function () {

    $("#content1").css("display", "block");
    $(".example1").addClass("active");
    $(".example").click(function () {
        $(".example").removeClass("active");
//  $(".example").children().removeClass("active");
        $(this).addClass("active");
//  $(this).children().addClass("active");

        var ID = $(this).data('id');
        if (ID == "content1") {
            $(this).css("margin-right", "20px")
        }
        $(".content-img").hide();
        $(ID).css("display", "block");



    });
//    $(document).scroll(function() {
//  var y = $(this).scrollTop();
//  if (y > 545) {
//    $('.feature').fadeIn();
//  } else {
//    $('.feature').fadeOut();
//  }
//});
//    $(".switch li").click(function(){
//        $($(this).data("id")).fadeOut();
//        
//    })

    particlesJS("particle-container", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "random"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    $("#news-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 2],
        itemsMobile: [600, 1],
        pagination: true,
        autoPlay: true
    });
    $('.tab-link').click(function () {

        var tabID = $(this).attr('data-tab');

        $(this).addClass('active').siblings().removeClass('active');

        $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
    });
    var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced 
            offsetOpacity = 1200,
            //duration of the top scrolling animation (in ms)
            scrollDuration = 700;
    /*Scroll to top when arrow up clicked BEGIN*/
    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 250) {
            $('#back2Top').fadeIn();
        } else {
            $('#back2Top').fadeOut();
        }
    });
    $(document).ready(function () {
        $("#back2Top").click(function (event) {
            event.preventDefault();
            $("html, body").animate({scrollTop: 0}, "slow");
            return false;
        });

    });
    /*Scroll to top when arrow up clicked END*/

    AOS.init({
        duration: 1200,
    });
//    window.addEventListener('load', AOS.refresh)
//    $("body").niceScroll({cursorcolor: "#000",cursorwidth: "10px",autohidemode: false,cursorborderradius: "0px", emulatetouch: true,zindex: "2000"});
    $(".loading-overlay .spinner").fadeOut(2000, function () {
        $(".loading-overlay").fadeOut(3000, function () {
            $("body").css("overflow", "auto");

        });

    });
    $(".advers .image1").mouseover(function () {
//      $(".advers .image2" ).css("opacity","1");
        $(".advers .image2").animate({left: "100px"});
//      $(".advers .image2" ).css("dispaly","block").fadeIn();
//       alert("red");

    });
    $(".advers .image1").mouseleave(function () {
        $(".advers .image2").animate({left: "-280px"});
//      $(".advers .image2" ).css("dispaly","block").fadeIn();
//       alert("red");

    });

    $(".down-button").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    });
    $(".btn-menu").on("click", function () {
        if ($(".side-menu").css("right") == "-300px")
        {
            $(".side-menu").animate({"right": "0px"}, 1000);
            $(".overlay-mob").fadeIn();
            $("body").css("overflow", "hidden");
            $(".btn-menu").css("z-index", "0");
//                $(".language-button").css("z-index","0");
        } else {
            $(".side-menu").animate({"right": "-300px"}, 1000);
            $(".overlay-mob").fadeOut();
            $("body").css("overflow", "auto");
            $(".btn-menu").css("z-index", "1000");
//                $(".language-button").css("z-index","1000");
        }


    });
    $(".overlay-mob").on("click", function () {
        $(".side-menu").animate({"right": "-300px"}, 1000);
        $(".overlay-mob").fadeOut();
        $("body").css("overflow", "auto");
        $(".btn-menu").css("z-index", "1000");
//                $(".language-button").css("z-index","1000");   
    });


    $("#contactDemo #name").on("input", function () {
        var regexp = /[^a-zA-Z\u0600-\u06FF\s]/g;
        if ($(this).val().match(regexp)) {
            $(this).val($(this).val().replace(regexp, ''));
        }
    });

    $("#contactDemo #phone").on("input", function () {
        var regexp = /[^0-9\s]/;
        if ($(this).val().match(regexp)) {
            $(this).val($(this).val().replace(regexp, ''));
        }
    });

    $('#contactDemo').on('submit', function () {
        var form = $(this);
        var name = $('#name', form).val();
        var email = $('#email', form).val();
        var phone = $('#phone', form).val();
        var company = $('#company', form).val();
        var city = $('#city', form).val();
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            beforeSend: function () {
                $('.btn', form).attr('disabled', 'disabled').find('i').css('display', 'inline-block');
                if (name == '' || !$.trim(name).length || name.length < 3) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">invalid your name</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#name', form).focus();
                    return false;
                } else if (email == '' || !$.trim(email).length || !testEmail.test(email)) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">invalid your email</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#email', form).focus();
                    return false;
                } else if (phone == '' || !$.trim(phone).length || phone.length < 4) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">invalid your phone</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#phone', form).focus();
                    return false;
                } else if (company == '' || !$.trim(company).length || name.length < 3) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">invalid your company name</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#company', form).focus();
                    return false;
                } else if (company == name) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">company is the same your name</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#company', form).focus();
                    return false;
                } else if (city == '' || !$.trim(city).length || name.length < 3) {
                    $('.modal-footer .pull-left', form).fadeIn().html('<div class="alert alert-danger">invalid your city name</div>').delay(3000).fadeOut();
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('#city', form).focus();
                    return false;
                }
            },
            success: function (data) {
                setTimeout(function () {
                    $('.btn', form).removeAttr('disabled').find('i').css('display', 'none');
                    $('.modal-footer .show-msg', form).html(data);
                    $('.modal-footer .show-msg .alert', form).delay(3000).fadeOut();
                    $('input[type="text"],input[type="email"], textarea', form).val('');
                }, 2000);
            }
        });
        return false;
    });

    $('#sendFriend').on('submit', function () {
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            beforeSend: function () {
                $('.btn i', form).css('display', 'inline-block');
            },
            success: function (data) {
                setTimeout(function () {
                    $('.btn i', form).hide();
                    $('.modal-footer .pull-left', form).html(data);
                    $('.modal-footer .pull-left .alert', form).delay(8000).fadeOut();
                    $('input[type="text"], input[type="email"], textarea', form).val('');
                }, 2000);
            }
        });
        return false;
    });


});