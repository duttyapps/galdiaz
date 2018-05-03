$(function () {
    var products_size = $("#listProducts .products").length;
    var x = 4;
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

});