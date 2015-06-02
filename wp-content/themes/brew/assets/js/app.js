// =============================================================================

    // APP JS
    // Property of the Swig
    // Authored by Josh Beveridge

// =============================================================================

(function($) {

    $(document).ready(function() {

        // Smooth Scrolling ====================================================
        $('a[href*=#]:not([href=#])').on('click touchend',function() {

           if(!$(this).parent().hasClass('accordion-navigation')) {

               if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {

                 var target = $(this.hash);

                 target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                 if (target.length) {
                   $('html,body').animate({
                     scrollTop: target.offset().top - $('.search-cta').outerHeight()
                   }, 650);
                   return false;
                 }

               }

           }

         });

        // Data Link Handler ===================================================
        $('[data-link-handler]').on('click touchend',function(e){
            if($('[data-link-target="'+$(this).attr('data-link-handler')+'"]').hasClass('active')) {
                $('[data-link-target="'+$(this).attr('data-link-handler')+'"]').removeClass('active');
            }
            else {
                $('[data-link-target="'+$(this).attr('data-link-handler')+'"]').addClass('active');
            }
            e.preventDefault();
        });

        // Navigation Handler ==================================================
        $('.menu dd a:not(.home)').on('click touchend', function(e) {
            if($('.glass-01').hasClass('active')) {
                if($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    // $('body').removeClass('active');
                    $('.menu-content').removeClass('active');
                    $('.glass-01, .glass-02, .glass-03').removeClass('active');
                }
                else {
                    $('.menu dd a').removeClass('active');
                    $('.menu-content').removeClass('active');
                    // $('body').addClass('active');
                    $('[data-link-target="'+$(this).attr('data-link-handler')+'"]').addClass('active');
                    $(this).addClass('active');
                }
            }
            else {
                $(this).addClass('active');
                $('[data-link-target="'+$(this).attr('data-link-handler')+'"]').addClass('active');
                // $('body').addClass('active');
                $('.glass-01, .glass-02, .glass-03').addClass('active');
            }
            e.preventDefault();
        });

        // Think Block Equalization ============================================
        if (window.matchMedia("(min-width:701px)").matches) {

            $('.post-preview').each(function() {
                var maxTitleHeight = 0;
                if($(this).find('h2').outerHeight() > maxTitleHeight) {
                    maxTitleHeight = $(this).find('h2').outerHeight();
                }

                $(this).find('h2').css('height', maxTitleHeight + 'px');

            });

        }

        // Splash Handler ======================================================
        $(document).on('ready', function() {

            function delayOne() {
                $('.splash .one').removeClass('active');
            }

            function delayTwoA() {
                $('.splash .two').addClass('active');
            }

            function delayTwoB() {
                $('.splash .two').removeClass('active');
            }

            function delayThreeA() {
                $('.splash .three').addClass('active');
            }

            function delayThreeB() {
                $('.splash .three').removeClass('active');
            }

            function delayFourA() {
                $('.splash .four').addClass('active');
            }

            function delayFourB() {
                $('.splash .four').removeClass('active');
            }

            function delayFiveA() {
                $('.splash .five').addClass('active');
            }

            function delayFiveB() {
                $('.splash .five').removeClass('active');
            }

            function delaySixA() {
                $('.splash .six').addClass('active');
            }

            function delaySixB() {
                $('.splash .six').removeClass('active');
            }

            function delaySevenA() {
                $('.splash .seven').addClass('active');
            }

            function delaySevenB() {
                $('.splash .seven').removeClass('active');
            }

            function delayEightA() {
                $('.splash .eight').addClass('active');
            }

            function delayEightB() {
                $('.splash .eight').removeClass('active');
            }

            function delayNine() {
                $('.splash span').addClass('active');
            }

            setTimeout(delayOne, 3000);
            setTimeout(delayTwoA, 3300);
            setTimeout(delayTwoB, 4300);
            setTimeout(delayThreeA, 4600);
            setTimeout(delayThreeB, 5600);
            setTimeout(delayFourA, 5900);
            setTimeout(delayFourB, 6900);
            setTimeout(delayFiveA, 7200);
            setTimeout(delayFiveB, 8200);
            setTimeout(delaySixA, 8500);
            setTimeout(delaySixB, 9500);
            setTimeout(delaySevenA, 9800);
            setTimeout(delaySevenB, 10800);
            setTimeout(delayEightA, 11100);
            setTimeout(delayNine, 12400);

            var textHeight = $('.splash .seven').outerHeight();
            $('.splash .eight img').css('height', textHeight/2 + 'px');

        });

        // Progress Handler ====================================================
        $(document).on('ready', function() {
            var navHeight = $('nav').outerHeight();
            var articleHeight = $('.page').outerHeight();

            if (window.matchMedia("(max-width: 800px)").matches) {

                var windowHeight = $(window).height() + navHeight;

                $(document).on('scroll', function(){
                    var position = $(window).scrollTop() / (articleHeight + windowHeight) * 100;
                    $('.value').css('width', position + '%');
                });

            }
            else {

                var windowHeight = $(window).height() - navHeight;

                $(document).on('scroll', function(){
                    var position = $(window).scrollTop() / (articleHeight + windowHeight) * 100;
                    $('.value').css('height', position + '%');
                });

            }

        });

    });

})(jQuery);
