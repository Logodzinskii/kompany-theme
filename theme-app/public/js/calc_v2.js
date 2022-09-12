$(document).ready(function () {
    $("body").on('click', function (e) {
        $("#live").text(getPosition(e));

    });
    $("input").on('change', function () {
        console.log($(this).val());
        $("#live").text($(this).val());
    });

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
