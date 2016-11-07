var zSlider = function(fn, animate) {
    var sliderdiv = fn;
    var animated = animate;
    var sliderInterval = null;

    function zslider() {
        sliderdiv.children('#arrowleft').click(function() {
            if(!IsAnimated())
                MoveBackward();
        });

        sliderdiv.children('#arrowright').click(function() {
            if(!IsAnimated())
                MoveForward();
        });


        if(animated) {
            sliderdiv.hover(function() {
                sliderInterval.stop();
            }, function() {
                sliderInterval.start();
            });
            
            sliderInterval = new Interval(MoveForward, 7000);
            sliderInterval.start();
        }
    }

    function IsAnimated() {
        return (sliderdiv.children('ul').is(":animated") || sliderdiv.children('ul').children('li').is(":animated"));
    }

    function MoveForward()
    {
        var total = (sliderdiv.children('ul').children('li:first-of-type').outerWidth());

        var first = sliderdiv.children('ul').children('li:first-of-type');  
        var slides = sliderdiv.children('ul').children('li');

        jQuery(slides).each(function() {
            jQuery(this).animate({left: "-="+(total) + "px" }, "slow", "swing", function() {
                jQuery(this).css("left", "0px");
                if(jQuery(this).is(first)) {
                    jQuery(first).remove();
                    sliderdiv.children('ul').append(first);
                }
            });
        });
    }

    function MoveBackward()
    {
        var total = (sliderdiv.children('ul').children('li:first-of-type').outerWidth());
        var slide = sliderdiv.children('ul').children('li:last-of-type');

        jQuery(slide).remove();

        var slides = sliderdiv.children('ul').children('li');
        sliderdiv.children('ul').prepend(slide);
        slide.css('left', (0 - total) + "px");
        jQuery(slides).each(function() {
            if(slide != this)
            jQuery(this).css('left', (0 - total) + "px");
        });
       
        var slides = sliderdiv.children('ul').children('li');
        jQuery(slides).each(function() {
            jQuery(this).animate({left: "+="+(total) + "px" }, "slow", "swing", function() {
                jQuery(this).css("left", "0px");
            });
        });
    }

    function Interval(fn, time) {
        var timer = false;
        this.start = function () {
            if (!this.isRunning())
                timer = setInterval(fn, time);
        };
        this.stop = function () {
            clearInterval(timer);
            timer = false;
        };
        this.isRunning = function () {
            return timer !== false;
        };
    }

    zslider();
}