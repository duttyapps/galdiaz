$(function () {
    var products_size = $("#listProducts .products").length;
    var x = 8;
    $("#listProducts .products:lt(" + x + ")").show();

    $("#btnShowMore").click(function () {
        x = (x + 4 <= products_size) ? x + 4 : products_size;
        $("#listProducts .products:lt(" + x + ")").show();
        if (x == products_size) {
            $(this).hide();
        }
    });

    $('#btnShowLess').click(function () {
        x = (x - 4 < 0) ? 4 : x - 4;
        $('#listProducts .products').not(':lt(' + x + ')').hide();
    });

    var navbar_pos = $('#main-navbar').offset().top;
    var navbar_height = $('#main-navbar').height();

    $(document).on('scroll', function () {
        if ($(this).scrollTop() >= navbar_pos) {
            $('#nb-fake-wrap').css('height', navbar_height);
            $('#main-navbar').addClass('fixed-top shadow');
        } else {
            $('#nb-fake-wrap').css('height', 0);
            $('#main-navbar').removeClass('fixed-top shadow');
        }

        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    $("#img_01").elevateZoom(
        {
            zoomType: "inner",
            gallery: 'gal1',
            cursor: 'pointer',
            galleryActiveClass: 'active',
            imageCrossfade: true,
            loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
        }
    );
});