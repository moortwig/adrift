var adrift = {
    init: function() {
        adrift.smoothScroller();
    },

    /**
     * Smooth scroller
     */
    smoothScroller: function() {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        // Adjust offset depending on header height:
                        scrollTop: (target.offset().top - 10)
                    }, 850);
                    return false;
                }
            }
        });
    }
};

adrift.init();
