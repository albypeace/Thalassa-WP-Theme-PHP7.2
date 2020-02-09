(jQuery)(function($) {

    /* ================ MAIN NAVIGATION ================ */

    (function() {
        $(" #nav ul ").css({
            display: "none"
        }); // Opera Fix
        $(" #nav li").hover(function() {
            $(this).find('ul:first').css({
                visibility: "visible",
                display: "none"
            }).slideDown(250);
        }, function() {
            $(this).find('ul:first').css({
                visibility: "hidden"
            });
        });
    })();

    /* ================ RESPONSIVE NAVIGATION ================ */
    $(function() {
        $('#dl-menu').dlmenu({
            animationClasses: {
                classin: 'dl-animate-in-2', 
                classout: 'dl-animate-out-2'
            }
        });
    });

    /* ========== TOP INFO EMAIL AND PHONE ======== */
    (function() {
        $('.header-wrapper').on('click', '.info .email, .info .phone', function(e) {
            e.stopPropagation(); /* POPRAVLJENO */
            if($(e.target).hasClass('email-icon')){
                $(this).addClass('active').find('.email-input').show(300).focus();
            }else if($(e.target).hasClass('phone-icon')){
                $(this).addClass('active').find('.phone-input').show(300).focus();
            }            
            
        });

        $('.email-input, .phone-input').focusout(function() {
            $(this).hide(300);
            $(this).closest('li').removeClass('active');
        });
    })();



    /* ================ CONTENT TABS ================ */
    (function() {
        $('.tabs').each(function() {
            var $tabLis = $(this).find('li');
            var $tabContent = $(this).next('.tab-content-wrap').find('.tab-content');

            $tabContent.hide();
            $tabLis.first().addClass('active').show();
            $tabContent.first().show();
        });

        $('.tabs').on('click', 'li', function(e) {
            var $this = $(this);
            var parentUL = $this.parent();
            var tabContent = parentUL.next('.tab-content-wrap');

            parentUL.children().removeClass('active');
            $this.addClass('active');

            tabContent.find('.tab-content').hide();
            var showById = $($this.find('a').attr('href'));
            tabContent.find(showById).fadeIn();

            e.preventDefault();
        });
    })();

    /* ================ ACCORDION ================ */

    (function() {
        'use strict';
        $('.accordion').on('click', '.title', function(event) {
            event.preventDefault();
            $(this).siblings('.accordion .active').next().slideUp('normal');
            $(this).siblings('.accordion .title').removeClass("active");

            if ($(this).next().is(':hidden') === true) {
                $(this).next().slideDown('normal');
                $(this).addClass("active");
            }
        });
        $('.accordion .content').hide();
        $('.accordion .active').next().slideDown('normal');
    })();

    (function() {

        /* ================ PLACEHOLDER PLUGIN ================ */
        $('input[placeholder], textarea[placeholder]').placeholder();
    })();

    /* ================ SCROLL TO TOP ================ */
    $(document).ready(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        $('.scroll-up').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });


    // TWEETSCROLL START
    $('.tweets-list-container').tweetscroll({
        username: 'pixel_industry',
        limit: 20,
        replies: true,
        position: 'append',
        animation: 'slide_up',
        visible_tweets: 2
    }); // TWEETSCROLL END

});
