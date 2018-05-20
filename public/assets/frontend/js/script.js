$(document).ready(function () {


    /*$("#home-slider").lightSlider({
        item: 1,
        loop: true,
        adaptiveHeight: true,
        auto: true,
        pause: 5000,
        prevHtml : '<span class="custom-prev-html"><i class="fa fa-angle-left"></i></span>',
        nextHtml : '<span class="custom-next-html"><i class="fa fa-angle-right"></i></span>',
    });

    $('.course-date-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.course-detail-slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true
    });*/

    $('.info-guide-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.gallery'
    });


    $('.gallery').slick({
        centerMode: true,
        centerPadding: '22.5%',
        slidesToShow: 1,
        infinite: true,
        asNavFor: '.info-guide-slider',
        prevArrow: '<button type="button" class="btn simple-btn prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="btn simple-btn next"><i class="fa fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ],
    });

    $('.gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide){
         $('#gallery-wrapper .total-slider .index').html(nextSlide+1);
    });



    $("#testimonial-slider").lightSlider({
        item: 1,
        loop: true,
        adaptiveHeight: true,
        auto: true,
        pause: 5000,
        controls: false,
    });


    $('.photo-slider').lightSlider({
        item: 5,
        loop: false,
        slideMove: 5,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '.photo-slider .lslide'
            });
        }
    });


    $('.custom-select').select2().on('select2-open', function() {


    });


    $('.custom-control').focusin(function (e) {
        e.preventDefault();
        $(this).prev().addClass('active');
    });

    $('.custom-control').focusout(function (e) {
        e.preventDefault();
        if ($(this).val() == ''){
            $(this).prev().removeClass('active');
        }
    });





    scrollNav();

});

$('body').on( 'scroll', function(){

    if($(this).scrollTop() >= 300){
        $('#main-navbar').addClass('active');
    }else {
        $('#main-navbar').removeClass('active');
    }

});



function scrollNav() {
    $('.anchor-list a').click(function(){
        //Toggle Class
        $(".active").removeClass("active");
        $(this).closest('li').addClass("active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('active');
        //Animate
        $('html, body').stop().animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 0
        }, 400);
        return false;
    });
}


function getReadableDate(stringDate) {
    var m_names = new Array("Januari", "Februari", "Maret",
        "April", "Mae", "Juni", "Juli", "Augustus", "September",
        "October", "November", "December");


    var d = new Date(stringDate);
    var date = d.getDate();
    var month = d.getMonth();
    var year = d.getFullYear();

    return  date+' '+m_names[month]+' '+year;
}


function getReadableMonth(key) {
    var m_names = new Array("Januari", "Februari", "Maret",
        "April", "Mae", "Juni", "Juli", "Augustus", "September",
        "October", "November", "December");


    return  m_names[key-1];
}