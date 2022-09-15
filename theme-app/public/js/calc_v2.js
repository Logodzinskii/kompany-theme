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
            $(this).parent().parent().children().last().attr('type',  'text');
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
                //console.log(response);
                if(response) {
                    //alert(response.email);
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
        $(window).on('load', function(){
            if($('.calc_body').width() < 700)
            {
                var y = 0;
                var x = 0;
                var h = 0;
                var w = 0;
                x= 700 - parseInt($('.calc_body').width());
                setCoord(x);
            }else{
                setDefCoord();
            }
        })

        $(window).on('resize',function (){
            if($('.calc_body').width() < 700){
                console.log($('.calc_body').width());
                var y = 0;
                var x = 0;
                var h = 0;
                var w = 0;
                x= 700 - parseInt($('.calc_body').width());

                console.log(parseInt($('.BoxTop').css('left')));
                console.log(700 - parseInt($('.calc_body').width()));
                setCoord(x);
            }

        })

        function setCoord(x){
            setBox(177 + (x/10),313 - (x/2.2), 170 - (x/4.2),30 - (x/24), 'BoxTop');
            setBox(209 + (x/15),325 - (x/2.12), 170 - (x/4.2),48 - (x/14), 'BoxMiddle');
            setBox(319 + (x/10),484 - (x/2.2), 28 - (x/4.2),68 - (x/24), 'BoxDown');
            setBox(329 - (x/9),469 - (x/1.5), 14 - (x/35),54 - (x/15), 'BottleMaker');
            setBox(312 - (x/10),392 - (x/1.8), 38 - (x/19),54 - (x/15), 'BoxShelves');
            setBox(303 - (x/12),364 - (x/1.92), 28 - (x/24),54 - (x/15), 'BoxDishwasher');
            setBox(293 - (x/14),313 - (x/2.2), 52 - (x/15),54 - (x/15), 'BoxWashing');
            setBox(150 + (x/7),274 - (x/2.6), 39 - (x/15),187 - (x/3.8), 'PenalFridge');
            setBox(140 + (x/6.7),232 - (x/3.0), 42 - (x/15),187 - (x/3.8), 'PenalMicrowave');
            setBox(124 + (x/5.5),154 - (x/4.2), 79 - (x/11),187 - (x/3.8), 'PenalShelves');
        }
        function setDefCoord()
        {
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
