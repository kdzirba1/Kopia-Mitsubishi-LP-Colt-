$(document).ready(function () {
    $('p,span,h1,h2,h3,h4,h5,h6,li').each(function () {
        var textReplace = $(this).html();
        var lettersToReplace = ["a", "i", "o", "u", "w", "z", "A", "I", "O", "U", "W", "Z", "bądź", "lub", "albo", "tudzież", "ni", "ani", "mianowicie", "ponieważ", "to jest", "dlatego", "przeto", "tedy", "więc", "zatem", "toteż", "czy", "aczkolwiek", "ale", "jednak", "zaś", "natomiast", "oraz", "aby", "bowiem", "choć", "jeżeli", "że", "aż", "za", "ta", "to"];
        var arrayLength = lettersToReplace.length;
        for (var i = 0; i < arrayLength; i++) {
            var textSplit = textReplace.split(' ' + lettersToReplace[i] + ' ');
            var textReplace = textSplit.join(' ' + lettersToReplace[i] + '&nbsp;');
        }
        $(this).empty();
        $(this).html(textReplace);
    });
})

function ww() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

function wh() {
    return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function changeImageInline(){
    const elms = document.querySelectorAll('*[data-bg]');    
    elms.forEach(function(item){
        let background;    
        if (Modernizr.webp && item.getAttribute('data-bg-webp')) {    
            background = item.getAttribute('data-bg-webp');    
        } else {    
            background = item.getAttribute('data-bg');    
        }    
        item.dataset.src = background;
        item.style.backgroundImage = "url(" + background + ")";    
    });
}

// Fullpage
$(document).ready(function () {
    // Landing po premierowy (sroda)
    if ($('#fullpage.landing').length) {
        $('#fullpage.landing').fullpage({
            //options here
            navigation: true,
            autoScrolling: false,
            scrollHorizontally: true,
            scrollOverflow: true,
            normalScrollElements: '.modal-open .modal, .select2-results__options',
            afterLoad: function (origin, destination, direction, trigger) {
                if ((fullpage_api.getActiveSection().slides).length) {
                    $('#fp-nav').fadeOut(75);
                    // todo przesuwanie prawo/lewo
                } else {
                    $('#fp-nav').fadeIn(75);
                }
                let delay = 250;

                $('.section.active').addClass('init');
                $('.section.active').find('.animation').each(function () {
                    delay = delay + 350;
                    setTimeout(() => {
                        $(this).addClass('init');
                    }, delay);
                })
            },
        });
        fullpage_api.setFitToSection(false);
    }
    // Landing sprzedazowy
    if ($('#fullpage:not(.landing)').length) {
        $('#fullpage:not(.landing)').fullpage({
            //options here
            navigation: true,
            autoScrolling: true,
            scrollHorizontally: true,
            normalScrollElements: '.modal-open .modal, .select2-results__options, #modal.active',
            afterLoad: function (origin, destination, direction, trigger) {
                let delay = 250;
                if ((fullpage_api.getActiveSection().slides).length) {
                    fullpage_api.setKeyboardScrolling(false, 'left, right');
                    fullpage_api.setAllowScrolling(false, 'left, right');
                    $('#fp-nav').fadeOut(75);
                    $('.section.active .s-form_1').addClass('init');
                    $('.section.active .s-form_1, .section.active .s-last-form').find('.animation').each(function () {
                        delay = delay + 350;
                        setTimeout(() => {
                            $(this).addClass('init');
                        }, delay);
                    })
                    // todo przesuwanie prawo/lewo
                } else {
                    $('#fp-nav').fadeIn(75);
                    fullpage_api.setKeyboardScrolling(true);
                    $('.section.active').addClass('init');
                    $('.section.active').find('.animation').each(function () {
                        delay = delay + 350;
                        setTimeout(() => {
                            $(this).addClass('init');
                        }, delay);
                    })
                }
                loadDealer(); 
            },
            afterSlideLoad(section, origin, destination, direction, trigger) {
                let delay = 250;
                delay = 0;
                $('.slide.active').addClass('init');
                $('.slide.active').find('.animation').each(function () {
                    // delay = delay + 350;
                    delay = 0;
                    setTimeout(() => {
                        $(this).addClass('init');
                    }, delay);
                })
                //loadDealer();
            }
        });
    }
    changeImageInline();
    //methods
});


$(document).on('click', '[data-scroll="nextSlide"]', function (e) {
    e.preventDefault();
    fullpage_api.moveSectionDown();
})

$(document).on('click', '[data-scroll="prevSlide"]', function (e) {
    e.preventDefault();
    fullpage_api.moveSectionUp();
})

$(document).on('click', '[data-scroll="rightSlide"]', function (e) {
    e.preventDefault();
    fullpage_api.moveSlideRight();
})

$(document).on('click', '[data-scroll="leftSlide"]', function (e) {
    e.preventDefault();
    fullpage_api.moveSlideLeft();
})

// Select2 init
$(function () {
    $('.select-default').select2({
        minimumResultsForSearch: -1,
    });
})

// Gallery
$(document).on('click', '.gallery-small', function () {
    let img = $(this).attr('data-src');
    let id = $(this).attr('data-id');
    let mainPhoto = $('.main-thumb.gallery-thumb');
    $('.gallery-upper .video-default').fadeOut(0);
    $('.main-thumb.gallery-thumb').fadeIn(0);
    mainPhoto.attr('data-id', id);
    mainPhoto.attr('style', 'background-image:url(' + img + ')');

    if (id == 0) {
        $('.main-thumb.gallery-thumb').fadeOut(0);
        $('.gallery-upper .video-default').fadeIn(0);
    } else {
        $('.gallery-upper .video-default').fadeOut(0);
        $('.main-thumb.gallery-thumb').fadeIn(0);
    }
})

// Gallery arrow
$(document).on('click', '.arrow-next', function () {
    let currentPhoto = $('.main-thumb').attr('data-id');
    let nextPhoto = parseInt(currentPhoto) + 1;
    if (nextPhoto <= 7) {
        $('.gallery-small[data-id="' + nextPhoto + '"]').click();
        $('.gallery-upper .video-default').fadeOut(0);
        $('.main-thumb.gallery-thumb').fadeIn(0);
    } else {
        $('.gallery-small[data-id="0"]').click();
        $('.main-thumb.gallery-thumb').fadeOut(0);
        $('.gallery-upper .video-default').fadeIn(0);
    }

})


// Counter to premiere
let countDownDate = new Date("Sep 20, 2022 19:00:00").getTime();

let x = setInterval(function () {

    let now = new Date().getTime();

    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);


    $('.counter').find('[data-id="day"]').html(days);
    $('.counter').find('[data-id="hour"]').html(hours);
    $('.counter').find('[data-id="minute"]').html(minutes);
    $('.counter').find('[data-id="second"]').html(seconds);

    if (distance < 0) {
        clearInterval(x);
        $('.counter').find('[data-id]').html('0');
    }
}, 1000);


// Turn on the video thumbnail
$(document).on('click', '.video-play', function () {
    $(this).fadeOut(200);
    $('.video-container').fadeIn(200);
})


// form
// reset form on page load
$(function () {
    $('[name="checker_engine"]').prop('checked', false);
    $('[name="checker_version"]').prop('checked', false);
    $('[name="checker_color"]').prop('checked', false);
    $('[name="checker_color_variable"]').prop('checked', false);
    $('#select_01').val('').trigger('change');
    $('[name="client_name"]').val();
    $('[name="client_phone"]').val();
    $('[name="client_email"]').val();
    $('#agreement_01').prop('checked', false);
    $('#agreement_02').prop('checked', false);
    $('#agreement_03').prop('checked', false);
    $('#agreement_04').prop('checked', false);
    $('#agreement_05').prop('checked', false);
    $('#agreement_06').prop('checked', false);
})

// Engine step
$(document).on('input', 'input[name="checker_engine"]', function () {
    engine = $(this).siblings().find('p')[0].innerText;
    engineID = $(this).attr('id');
    engineHTML = $(this).siblings().find('p')[0].innerHTML;
    $('#formSummary li[data-engine]').attr('data-engine', engine);
    $('#formSummary li[data-engine]').html(engineHTML);
    $('[data-btn="engine"]').attr('data-id', engineID);
    $('[data-btn="engine"]').attr('data-scroll', 'rightSlide');
    $('[data-btn="engine"]').removeAttr('disabled');
})

// Show versions on proceed to version step
$(document).on('click', '[data-btn="engine"]', function () {
    $('.form-content[data-engine]').fadeOut(10);
    $('.form-content[data-engine="' + engineID + '"]').fadeIn(10);
})


// Version step
$(document).on('input', 'input[name="checker_version"]', function () {
    version = $(this).siblings().find('p')[0].innerText;
    versionID = $(this).attr('id');
    versionColor = $(this).attr('data-color');
    versionHTML = $(this).siblings().find('p')[0].innerHTML;
    $('#formSummary li[data-version]').attr('data-version', version);
    // wersja wyposażenia
    $('input[name="1da69054-a58b-4f6a-a6e8-ed84bed45bf7"]').val(version);

    $('#formSummary li[data-version]').html(versionHTML);
    $('[data-btn="version"]').attr('data-id', versionColor);
    $('[data-btn="version"]').attr('data-scroll', 'rightSlide');
    $('[data-btn="version"]').removeAttr('disabled');
})

// Show colors on proceed to colors step
$(document).on('click', '[data-btn="version"]', function () {
    $('.form-content[data-color]').fadeOut(10);
    $('.form-content[data-color="' + versionColor + '"]').fadeIn(10);
})

// Color step
$(document).on('input', 'input[name="checker_color"],input[name="checker_color_variable"]', function () {
    color = $(this).siblings().find('p')[0].innerText;
    colorID = $(this).attr('id');
    colorHTML = $(this).siblings().find('p')[0].innerHTML;
    $('#formSummary li[data-color]').attr('data-color', color);
    $('#formSummary li[data-color]').html(colorHTML);
    $('#formSummary li[color-variable]').attr('color-variable', versionColor);
    $('[data-btn="color"]').attr('data-id', colorID);
    $('[data-btn="color"]').attr('data-scroll', 'rightSlide');
    $('[data-btn="color"]').removeAttr('disabled');
})

// After premiere landing scroll to last section
$(document).on('click', '.sign-in,#scrollForm', function (e) {
    e.preventDefault();
    // fullpage_api.moveTo('slide-last');
    $('html, body').animate({
        scrollTop: $(".form-content").offset().top
    }, 1000);
});    


// Gallery slider on mobile
$(function () {
    $('.gallery-lower').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 768,
                settings: 'unslick'
            },
        ],
    });

})

// tooltips
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


let flag = false;

function loadDealer() {
    if (flag == false) {
        let url = window.document.referrer;

        if (url === null || url === undefined || url === '') {
            url = 'https://www.mitsubishi.pl/';
          }

        let ref = url.match(/:\/\/(.[^/]+)/)[1];

        let sliced = ref.split(".");
        let city = '';

        if (sliced[0] == 'www') {
            if (sliced[1] == 'mitsubishi') {
                city = sliced[2]
            } else {
                city = sliced[1];
            }
        } else if (sliced[0] == 'mitsubishi') {
            city = sliced[1];
        } else {
            city = sliced[0];
        }

        console.log('city:', city);

        if (city == 'mitsubishi-grafix') {
            $('select[name="select_01"]').val('80');
            $('#select_02 option:not([value="80"]),#select_01 option:not([value="80"]),#select_03 option:not([value="80"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('80');
            $('#select_02').val('80');
            $('#select_03').val('80');
        } else if (city == 'mitsubishi-japanmotors') {
            $('select[name="select_01"]').val('');
            $('#select_02 option:not([data-dealer="japanmotors"]),#select_01 option:not([data-dealer="japanmotors"]),#select_03 option:not([data-dealer="japanmotors"])').remove();
            $('body').addClass('select-multiple');
            $('#select_01').val('');
            $('#select_02').val('');
            $('#select_03').val('');
        } else if (city == 'mitsubishi-sobczyk') {
            $('select[name="select_01"]').val('');
            $('#select_02 option:not([data-dealer="mitsubishi-sobczyk"]),#select_01 option:not([data-dealer="mitsubishi-sobczyk"]),#select_03 option:not([data-dealer="mitsubishi-sobczyk"])').remove();
            $('body').addClass('select-multiple');
            $('#select_01').val('');
            $('#select_02').val('');
            $('#select_03').val('');
        } else if (city == 'motorcentrum') {
            $('select[name="select_01"]').val('69');
            $('#select_02 option:not([value="69"]),#select_01 option:not([value="69"]),#select_03 option:not([value="69"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('69');
            $('#select_02').val('69');
            $('#select_03').val('69');
        } else if (city == 'wojtanowicz') {
            $('select[name="select_01"]').val('87');
            $('#select_02 option:not([value="87"]),#select_01 option:not([value="87"]),#select_03 option:not([value="87"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('87');
            $('#select_02').val('87');
            $('#select_03').val('87');
        } else if (city == 'mitsubishi-katowice') {
            $('select[name="select_01"]').val('68');
            $('#select_02 option:not([value="68"]),#select_01 option:not([value="68"]),#select_03 option:not([value="68"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('68');
            $('#select_02').val('68');
            $('#select_03').val('68');
        } else if (city == 'mitsubishi-lublin') {
            $('select[name="select_01"]').val('132');
            $('#select_02 option:not([value="132"]),#select_01 option:not([value="132"]),#select_03 option:not([value="132"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('132');
            $('#select_02').val('132');
            $('#select_03').val('132');
        } else if (city == 'mitsubishi-polody') {
            $('select[name="select_01"]').val('');
            $('#select_02 option:not([data-dealer="polody"]),#select_01 option:not([data-dealer="polody"]),#select_03 option:not([data-dealer="polody"])').remove();
            $('body').addClass('select-multiple');
            $('#select_01').val('');
            $('#select_02').val('');
            $('#select_03').val('');
        } else if (city == 'mitsubishi-zabrze') {
            $('select[name="select_01"]').val('130'); 
            $('#select_02 option:not([value="130"]),#select_01 option:not([value="130"]),#select_03 option:not([value="130"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('130');
            $('#select_02').val('130');
            $('#select_03').val('130');
        } else if (city == 'mitsubishigorzow') {
            $('select[name="select_01"]').val('48'); 
            $('#select_02 option:not([value="48"]),#select_01 option:not([value="48"]),#select_03 option:not([value="48"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('48');
            $('#select_02').val('48');
            $('#select_03').val('48');
        } else if (city == 'kalisz') {
            $('select[name="select_01"]').val('50'); 
            $('#select_02 option:not([value="50"]),#select_01 option:not([value="50"]),#select_03 option:not([value="50"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('50');
            $('#select_02').val('50');
            $('#select_03').val('50');
        } else if (city == 'autokrak') {
            $('select[name="select_01"]').val('56'); 
            $('#select_02 option:not([value="56"]),#select_01 option:not([value="56"]),#select_03 option:not([value="56"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('56');
            $('#select_02').val('56');
            $('#select_03').val('56');
        } else if (city == 'satall') {
            $('select[name="select_01"]').val(''); 
            $('#select_02 option:not([data-dealer="satall"]),#select_01 option:not([data-dealer="satall"]),#select_03 option:not([data-dealer="satall"])').remove();
            $('body').addClass('select-multiple');
            $('#select_01').val('');
            $('#select_02').val('');
            $('#select_03').val('');
        } else if (city == 'michalskimotors') {
            $('select[name="select_01"]').val('61'); 
            $('#select_02 option:not([value="61"]),#select_01 option:not([value="61"]),#select_03 option:not([value="61"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('61');
            $('#select_02').val('61');
            $('#select_03').val('61');
        } else if (city == 'rzeszow') {
            $('select[name="select_01"]').val('60'); 
            $('#select_02 option:not([value="60"]),#select_01 option:not([value="60"]),#select_03 option:not([value="60"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('60');
            $('#select_02').val('60');
            $('#select_03').val('60');
        } else if (city == 'mitsubishiszczecin') {
            $('select[name="select_01"]').val('131'); 
            $('#select_02 option:not([value="131"]),#select_01 option:not([value="131"]),#select_03 option:not([value="131"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('131');
            $('#select_02').val('131');
            $('#select_03').val('131');
        } else if (city == 'torun') {
            $('select[name="select_01"]').val('51'); 
            $('#select_02 option:not([value="51"]),#select_01 option:not([value="51"]),#select_03 option:not([value="51"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('51');
            $('#select_02').val('51');
            $('#select_03').val('51');
        } else if (city == 'autogt') {
            $('select[name="select_01"]').val('55'); 
            $('#select_02 option:not([value="55"]),#select_01 option:not([value="55"]),#select_03 option:not([value="55"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('55');
            $('#select_02').val('55');
            $('#select_03').val('55');
        } else if (city == 'zaborowski') {
            $('select[name="select_01"]').val('129'); 
            $('#select_02 option:not([value="129"]),#select_01 option:not([value="129"]),#select_03 option:not([value="129"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('129');
            $('#select_02').val('129');
            $('#select_03').val('129');
        } else if (city == 'mitsubishizg') {
            $('select[name="select_01"]').val('49'); 
            $('#select_02 option:not([value="49"]),#select_01 option:not([value="49"]),#select_03 option:not([value="49"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('49');
            $('#select_02').val('49');
            $('#select_03').val('49');
        }
        
        else if (city == 'cmcmotors') {
            $('select[name="select_01"]').val('138'); 
            $('#select_02 option:not([value="138"]),#select_01 option:not([value="138"]),#select_03 option:not([value="138"])').remove();
            $('body').addClass('select-disabled');
            $('#select_01').val('138');
            $('#select_02').val('138');
            $('#select_03').val('138');
        }
        
        else {
            $('select[name="select_01"]').val('');
        }


        setTimeout(() => {
            $('#select_01').trigger('change');
            $('#select_02').trigger('change');
            $('#select_03').trigger('change');
        }, 2500);


        console.log($('#select_02').val());
    }
    flag = true;
};