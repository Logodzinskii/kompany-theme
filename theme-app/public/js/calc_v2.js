$(document).ready(function () {
    $(".calc_body").on('click', function (e) {
        //$("#live").text(getPosition(e));
        //alert(getPosition(e));

    });

    $('.checkbox').on("click", function () {
        if ($(this).is(":checked")) {
            $(this).parent().parent().children().last().attr('type',  'text');
            $(this).parent().parent().css({opacity:1});
            $('.' + $(this).attr('name')).css('background', 'green');
        } else {
            // checkbox unchecked
            $(this).parent().parent().children().last().val(0);
            $(this).parent().parent().children().last().attr('type',  'hidden');
            $(this).parent().parent().css({opacity:0.7});
            $('.' + $(this).attr('name')).css('background', 'grey');
        }
    });

    function initialize()
    {
        setBox(177,313, 170,30, 'BoxTop');
        setBox(209,325, 170,48, 'BoxMiddle');
        setBox(319,484, 28,68, 'BoxDown');
    }
    initialize();
    function setBox(top,left, width, height, name)
    {
        $('.' + name).css({"top": ""+ top +"px", "left": ""+ left +"px", "width": ""+ width +"px", "height": ""+ height +"px"});
    }


    function getPosition(e) {
        var x = y = 0;

        if (!e) {
            var e = window.event;
        }

        if (e.pageX || e.pageY) {
            x = e.pageX;
            y = e.pageY;
        } else if (e.clientX || e.clientY) {
            x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }

        return y + "|" + x;
    }
})
