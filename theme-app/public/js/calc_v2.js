$(document).ready(function () {
    $(".calc_body").on('click', function (e) {
        //$("#live").text(getPosition(e));
        console.log((getPosition(e)));

    });

    $('.checkbox').on("click", function () {
        if ($(this).is(":checked")) {
            $(this).parent().parent().children().last().attr('type',  'text');
            $(this).parent().parent().css({opacity:1});
        } else {
            // checkbox unchecked
            $(this).parent().parent().children().last().val(0);
            $(this).parent().parent().children().last().attr('type',  'hidden');
            $(this).parent().parent().css({opacity:0.7});
        }
    })


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
