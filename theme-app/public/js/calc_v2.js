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
        let name = 'name';
        let email = 'name';
        let mobile_number = 'name';
        let message = 'name';
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/calculate/",
            type:"POST",
            data:{
                name:name,
                email:email,
                mobile_number:mobile_number,
                message:message,
                _token: _token
            },
            success:function(response){
                console.log(response);
                if(response) {
                    //alert(response.success);
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
        setBox(177,313, 170,30, 'BoxTop');
        setBox(209,325, 170,48, 'BoxMiddle');
        setBox(319,484, 28,68, 'BoxDown');
        setBox(329,469, 14,54, 'BottleMaker');
        setBox(312,392, 38,54, 'BoxShelves');
        setBox(303,364, 28,54, 'BoxDishwasher');
        setBox(293,313, 52,54, 'BoxWashing');
        setBox(150,274, 39,187, 'PenalFridge');
        setBox(140,232, 42,187, 'PenalMicrowave');
        setBox(124,154, 79,187, 'PenalShelves');
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
