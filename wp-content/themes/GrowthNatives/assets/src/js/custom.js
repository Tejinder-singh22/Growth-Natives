jQuery(document).ready(function () {
    jQuery('.partners-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 2,
                dots: false,
                nav: false
            },
            600: {
                items: 4,
                dots: false,
                nav: false
            },
            1000: {
                items: 5,
                dots: false,
                nav: false
            }
        }
    });
    jQuery('#happy-client-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            600: {
                items: 1,
                dots: true
            },
            1000: {
                items: 1,
                dots: true
            }
        }
    });
    jQuery(document).ready(function () {
        setTimeout(function () {
            jQuery('#banner-new-carousel').owlCarousel({
                loop: true,
                items: 1,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                nav: false,
                dots: false,
                smartSpeed: 900,
                animateOut: 'slideOutUp',
                animateIn: 'slideInUp'
            })
        }, 3000)
    });

    jQuery('.bxslider.text').bxSlider({
        mode: 'vertical',
        pager: false,
        controls: false,
        infiniteLoop: true,
        auto: true,
        speed: 300,
        pause: 2000, loop: true
    });

    jQuery('.dropdown-large.megamenu').on('click', function (event) {
        // The event won't be propagated up to the document NODE and
        // therefore delegated events won't be fired
        event.stopPropagation();
    });

    jQuery('.happy-client-carousel .play-button > a').click(function (e) {
        const youtube_link = e.currentTarget.attributes['datayoutube'].value
        jQuery('#youtube-modal .modal-body iframe').attr('src', youtube_link)
    })

});

