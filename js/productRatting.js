jQuery(document).ready(function ($) {
    
    // declare string alert.
    var alertRequireCheckRate = 'Mời bạn đưa ra đánh giá của mình';
    var alertRequireTypeName = 'Mời bạn nhập vào tên của mình';
    var alertRequireTypeEmail = 'Mời bạn nhập vào email';
    var alertValidEmail = 'Email không đúng định dạng';
    var alertError = 'Đã xảy ra lỗi';
    
    // Get Id of current product.
    var idProduct = $('#productId').val();
    
    // Get current record of product.
    var currentRecord = $('#rating').attr('data-score');
    
    // Check cookie when user goto page.
    // If cookie already exists then block rating.
    if (getCookie('nameCookieRate' + +idProduct) != '' && getCookie('mailCookieRate' + idProduct) != '' && getCookie('idProductCookieRate' + idProduct) != '') {
        if (getCookie('idProductCookieRate' + idProduct) == idProduct) {
            ratingBlock();
        }
    } else if (getCookie('nameCookieRate' + idProduct) == '' && getCookie('mailCookieRate' + idProduct) == '' && getCookie('idProductCookieRate' + idProduct) == '') {
        rating();
        ratingFromSend();
        // Open form send rating.
        $('#link-display-rate').on('click',function () {
            $('#div-sending-rate').show();
            $('#openVieSendRate').show();
            $('#divRate').hide();

            setInfromationCookie();
        });

        // Destroy choose rating.
        $('#btnDestroy').on('click', function() {
            $('#div-sending-rate').hide();
            $('#openVieSendRate').hide();
            formatFormSendRating();
            rating();
            ratingFromSend();
        });
        
        // Process Send rating.
        $('#btnSend').on('click', function () {
            // Declare variable url.
            var url = $('#rating').attr('data-url');
            
            // Get value of form rating.
            var valueTxtAre = $('#txtArea').val();
            var valueName = $('#txtNameRating').val();
            var valueEmail = $('#txtEmailRating').val();
            var valueRating = $('#value-rate').text();
            
            if (valueRating == 0) {
                alert(alertRequireCheckRate);
            } else if (valueName === '') {
                alert(alertRequireTypeName);
            } else if (valueEmail === '') {
                alert(alertRequireTypeEmail);
            } else if (!isValidEmailAddress(valueEmail)) {
                alert(alertValidEmail);
            }else {
                $.post(url, {
                    'note': valueTxtAre,
                    'name': valueName,
                    'email': valueEmail,
                    'rating': valueRating,
                    'idProduct': idProduct
                }).done(function () {
                    ratingBlock();
                    setCookie('nameCookieRate' + idProduct, valueName);
                    setCookie('mailCookieRate' + idProduct, valueEmail);
                    setCookie('idProductCookieRate' + idProduct, idProduct);
                    $('#div-sending-rate').hide();
                    $('#openVieSendRate').hide();
                    $('.show-ratting-post').html('<div>Cám ơn bạn đã đánh giá </div>');
                }).fail(function () {
                    alert(alertError);
                });
            }
        });
    }
    
    // Click $('#closeVieSendRate').click(function () {
    $('#closeVieSendRate').on('click',function () {
        $('#div-sending-rate').hide();
        $('#openVieSendRate').hide();
        formatFormSendRating();
        rating();
        ratingFromSend();
    });
    
    // View percent rating of product.
    $('#ViewRate').click(function () {
        $('#divRate').show();
        $('#openVieSendRate').hide();
        $('#div-sending-rate').hide();
    });
    
    // Close view rate.
    $('#closeViewRate').click(function () {
        $('#divRate').hide();
    });
    
    // Check valid Email.
    function isValidEmailAddress(emailAddress) {
        var re = /[A-Z0-9._%+-]+\x40[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        return re.test(emailAddress);
    }
    
    //set cookie
    function setCookie(cName, value) {
        var exdate = new Date();
        var exMinutes = 30;
        exdate.setMinutes(exdate.getMinutes() + exMinutes);
        var cValue = escape(value) + ((exMinutes == null) ? "" : ("; expires=" + exdate.toUTCString() + ";path=" + window.location.pathname));
        document.cookie = cName + '=' + cValue;
    }

    // get cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
    
    // Function set infromation of user to textbox,
    // if user login to system.
    function setInfromationCookie() {
        var cookieUserLogin = getCookie('customerName');
        var cookieEmailLogin = getCookie('customerEmail');
        
        if (cookieUserLogin != '' && cookieEmailLogin != '') {
            $('#txtNameRating').val(cookieUserLogin).attr('disabled','disabled');
            $('#txtEmailRating').val(cookieEmailLogin).attr('disabled','disabled');
        }
    }
    
    // Format form send rating.
    function formatFormSendRating() {
        $('#txtArea').val('');
        $('#txtNameRating').val('');
        $('#txtEmailRating').val('');
    }
    
    // Function rating.
    function rating() {
        $('#rating').raty({
            click: function (score, evt) {
                $('#div-sending-rate').show();
                $('#openVieSendRate').show();
                $('#divRate').hide();
                $('#idratingcheck').raty({
                    score: score,
                    width: 185,
                    target: '#value-rate',
                    targetType: 'number',
                    targetKeep: true,
                    readOnly: true
                });
                setInfromationCookie();
            },
            score: function () {
                return currentRecord.replace(',', '.');
            },
            width: 159,
            target: '.number-ratting',
            targetType: 'number',
            targetKeep: true
        });
    }
    
    // Function rating block.
    function ratingBlock() {
        $('.show-ratting-post').html('<div>Bạn đã đánh giá sản phẩm</div>');
        $('#rating').raty({
            readOnly: true,
            width: 159,
            score: function () {
                return currentRecord.replace(',', '.');
            },
        });
    }
    
    //Function display rating of form send rating.
    function ratingFromSend() {
        // Process display choose rating.
        $('#idratingcheck').raty({
            width: 185,
            target: '#value-rate',
            targetType: 'number',
            targetKeep: true,
        });
    }
});