$(document).ready(function(){

//    NAV MENU
    $(window).scroll(function () {

        // FOR DESKTOP
        if($(this).scrollTop() >= 150) {
            $('.nav').addClass('sticky-top');
            $('.sticky-top').animate({marginTop:0},500);
        } else {
            $('.nav').removeClass('sticky-top');
        }

        // FOR MOBILE
        if($(this).scrollTop() > 0) {
            $('#mob-header-container').addClass('sticky-top');
            $('.sticky-top').animate({marginTop:0},500);
        } else {
            $('#mob-header-container').removeClass('sticky-top');
        }
    });


//    MOBILE MENU

    // OPEN MENU
    $('#mob-menu-btn').on('click', function () {

        $('div#mob-menu-close-btn').css('display','block');
        $('div#mob-menu-close-btn').animate({marginLeft:'0'},300);
        $('div#mob-menu-btn').animate({marginLeft:'-200px'},300);
        $('#mob-menu').css('display','block');
        $('#mob-menu').animate({marginTop:'0vh'},500);
        $('section, div.bottom, div#mob-menu-btn').delay(300).queue(function (next) {
            $(this).css('display','none');
            next();
        });
    });

    // CLOSE MENU
    $('#mob-menu-close-btn').on('click', function () {

        $('div#mob-menu-btn').css('display','block');
        $('div#mob-menu-btn').animate({marginLeft:'0'},300);
        $('div#mob-menu-close-btn').animate({marginLeft:'-200px'},300);
        $('#mob-menu').animate({marginTop:'-100vh'},500);
        $('section, div.bottom').css('display','block');
        $('#mob-menu, div#mob-menu-close-btn').delay(300).queue(function (next) {
            $(this).css('display','none');
            next();
        });
    });


    //    GET URL
    $(function () {
        $('.nav-list a').each(function () {
            let location = window.location.href;
            let link = this.href;
            if(location === link) {
                $(this).addClass('active');
            }
        });
    });

    //    ACCORDION PANEL
    $('.accordion').on('click', '.accordion-control', function (e) {
        e.preventDefault();
        if ($(this).find('.expand-info').hasClass('mod-opened')) {
            $(this).find('.expand-info').removeClass('mod-opened').addClass('mod-closed');
        } else {
            $(this).find('.expand-info').removeClass('mod-closed').addClass('mod-opened');
        }
        $('.accordion').find('.accordion-panel').not(':animated').slideToggle();
        $(this).next('.accordion-panel').not(':animated').slideToggle();
    });

});