$(document).ready(function () {

    function moveSlider(e) {
        var position = $(e.currentTarget).offset()
        var positionX = e.pageX - position.left;
        var value = positionX * 100 / $(e.currentTarget).outerWidth();

        if (positionX >= 0 && positionX <= $(e.currentTarget).outerWidth()) {
            $('.slider > .progress').css('width', positionX + 'px');
            $('.slider > .indicator').css('left', positionX + 'px');

            $('#value').val(value.toFixed());

        }
        if (value >= 80) {
            $('.halfRight').fadeOut(1000);
            $('.halfLeft').fadeOut(1000);
            //            $('.mainSection').addClass('zoom');
            setTimeout(function () {
                $('.mainSection').addClass('zoom');
            }, 1200);

            setTimeout(function () {
                $(".mainSection").css('display', 'none');
            }, 1600);
            
            $(".menu").load('menu.html', function (data) {
                $(this).html(data);
            });
                
            $('.menu').fadeIn(200);
        } 
    }

    $('.slider').on('mousedown', function (e) {
        moveSlider(e);

        $(this).on('mousemove', function (e) {
            moveSlider(e);
        })
    }).on('mouseup', function () {
        $(this).off('mousemove');
    });
});
