$(document).ready(function(){
    $(".owl-carousel").owlCarousel(
        {
            margin:0,
            nav:true,
            navText: ["<img src='images/arrows/arrow-left-square-fill.svg'>", "<img src='images/arrows/arrow-right-square-fill.svg'>"],
            dots:false,
            responsiveClass: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            },
            onTranslate: callback,
        }
    );

    function callback(event) {
        // По основным
        // DOM элемент, например .owl-carousel
        var element = event.target;
        // Имя события, например dragged
        var name = event.type;
        // Пространство имен события, например owl.carousel
        var namespace = event.namespace;
        // Количество элементов
        var items = event.item.count;
        // Позиция текущего элемента
        var item = event.item.index;

        // Плагин навигации карусели
        // Количество страниц
        var pages = event.page.count;
        // Положение текущей страницы
        var page = event.page.index;
        // Количество элементов на странице
        var size = event.page.size;
        var p, z, childrens;
        p = document.getElementById('info');
        z = document.getElementById('info_hol');
        let output = "";
        let price ='';
        var parentElement ;
        let parentElemChildNodes ='';

        for (const attr of element.attributes) {
            parentElement = document.getElementById(attr.value); //куда записываю

            if(`${attr.name}` == 'data-id')
            {
                parentElement = document.getElementById(attr.value); //куда записываю

                parentElemChildNodes = parentElement.getAttribute('data-price');
                price = parentElemChildNodes;
                const elem = element.children;
                console.log(elem[0].children[0].children[item].children[0].dataset.price)
                parentElement.innerHTML = elem[0].children[0].children[item].children[0].dataset.price;

            }

        }

    }
    $('input').on('change',function() {
        var price = $(this).parent().parent().children().eq('2').find('span').text();
        $(this).parent().parent().children().last().find('span').text(parseInt($(this).val()) * parseInt(price));
        if ($(this).parent().parent().children().last().hasClass('bg-warning'))
        {

        }else {
            $(this).parent().parent().children().last().addClass('bg-warning');
        }
    });
    $('.btn').on('click', function (e){
        var first = $("#tatalpriceId1").text();
        var second = $("#tatalpriceId2").text();
        var three = $("#tatalpriceId3").text();
        var four = $("#tatalpriceId4").text();
        var five = $("#tatalpriceId5").text();

        $("#totalPrice").text(parseInt(first) + parseInt(second) + parseInt(three) + parseInt(four) + parseInt(five));
        var el = $('.bg-warning');
        el.removeClass('bg-warning');
        el.addClass('bg-success');
        el.addClass('text-white');
        e.preventDefault();
    });

});
