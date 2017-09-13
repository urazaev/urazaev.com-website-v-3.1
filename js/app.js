$('.slider-top__content').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }
    }

)

//$('.slider-portfolio__content').owlCarousel({
//    loop: true,
//    autoplay: true,
//    autoplayTimeout: 2000,
//    autoplayHoverPause: true,
//    responsiveClass: true,
//    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
//    responsive: {
//        0: {
//            items: 1,
//            nav: true
//        },
//        600: {
//            items: 1,
//            nav: true
//        },
//        1000: {
//            items: 1,
//            nav: true,
//            loop: true
//        }
//    }
//})

$('.testimonials').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsiveClass: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true,
            loop: true
        }
    }
})

var ContactForm = function () {

    return {

        //Contact Form
        initContactForm: function () {
            // Validation

            $("#order-form-modal").validate({
                // Rules for form validation
                rules: {
                    name: {
                        required: true
                    },
                    hotel: {
                        required: true
                    },
                    adr: {
                        required: true
                    },
                    tel: {
                        required: true,
                        digits: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },

                // Messages for form validation
                messages: {
                    name: {
                        required: 'Введите ваше имя',
                    },
                    hotel: {
                        required: 'Введите название фирмы'
                    },
                    adr: {
                        required: 'Введите адрес'
                    },
                    tel: {
                        required: 'Введите телефон',
                        digits: 'Только цифры'
                    },
                    email: {
                        required: 'Введите email',
                        email: 'Введите корректный email'
                    }
                },

                // Ajax form submition                  
                submitHandler: function (form) {
                    $(form).ajaxSubmit({
                        beforeSend: function () {
                            $('#order-form-modal button[type="submit"]').attr('disabled', true);
                        },
                        success: function () {
                            $("#order-form-modal").addClass('submited');
                        }
                    });
                },

                // Do not change code below
                errorPlacement: function (error, element) {
                    error.insertAfter(element.parent());
                }
            });


        }

    };

}();

function initMap() {
    var customMapType = new google.maps.StyledMapType();

    var image = new google.maps.MarkerImage(
        'https://urazaev.pro/wp-content/themes/urazaev-production/img/marker.png',
        new google.maps.Size(90, 65),
        new google.maps.Point(0, 0),
        new google.maps.Point(24, 54)
    );

    var customMapTypeId = 'custom_style';

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        scrollwheel: false,
        center: {
            lat: 41.293228,
            lng: 69.214389
        }, // 
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP]
        }
    });

    var infowindow = new google.maps.InfoWindow;
    infowindow.setContent('<b>Мы здесь</b>');

    var marker = new google.maps.Marker({
        map: map,
        clickable: false,
        icon: image,
        position: {
            lat: 41.293228,
            lng: 69.214389
        }
    });

    map.mapTypes.set(customMapTypeId, customMapType);
    map.setMapTypeId(customMapTypeId);
}

$("[data-fancybox]").fancybox({
    image: {
        protect: true
    },
    slideShow: true,
    fullScreen: true,
    thumbs: true,
    closeBtn: true,
});