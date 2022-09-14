$(document).ready(function () {
    $("body").on('click', function (e) {
        //$("#live").text(getPosition(e));
        console.log((getPosition(e)));

    });

    $('.checkbox').on("click", function () {
        if ($(this).is(":checked")) {
            $(this).parent().children().last().attr('type',  'text');
        } else {
            // checkbox unchecked
            $(this).parent().children().last().val(0);
            $(this).parent().children().last().attr('type',  'hidden');

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
