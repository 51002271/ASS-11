$(document).ready(function () {

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }

    var productid = $('#productId').val();
    var variantid = $('.color>.current>a').attr('data-id');
    if (getCookie('variantId') == '' || getCookie('variantId') == undefined) {
        document.cookie = "variantId" + productid + "" + "=" + variantid + "";
    }
    if (getCookie('variantId') != ' ') {
        document.cookie = "variantId=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
        document.cookie = "variantId" + productid + "" + "=" + variantid + "";
    }
    $(document).on('click', '.color>li>a', function () {
         productid = $('#productId').val();
         variantid = $('.color>.current>a').attr('data-id');
        if (getCookie('variantId') == '' || getCookie('variantId') == undefined) {
            document.cookie = "variantId" + productid + "" + "=" + variantid + "";
        }
        if (getCookie('variantId') != ' ') {
            document.cookie = "variantId=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
            document.cookie = "variantId" + productid + "" + "=" + variantid + "";
        }
    });
});

