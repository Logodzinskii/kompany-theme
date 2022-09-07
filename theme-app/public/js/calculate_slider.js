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

    function sumTotal()
    {
        let first = document.getElementById("1").innerText;
        let second = document.getElementById("2").innerText;
        let three = document.getElementById("3").innerText;
        let four = document.getElementById("4").innerText;
        let five = document.getElementById("5").innerText;

        document.getElementById("totalPrice").innerText = (Number(first) + Number(second) + Number(three) + Number(four) + Number(five));

    }

});
