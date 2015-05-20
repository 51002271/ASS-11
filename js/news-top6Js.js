function tick(){ 
        $('#news_Tbh_tick li:first').slideUp( function () {  
            $(this).appendTo($('#news_Tbh_tick')).slideDown();  
        });         
    }
    setInterval(function(){ tick () }, 3000);	

    (function () {
                        var hexacode = ['#034ea1','#f37020','#51b747'],
                        el = document.getElementById('news_topBar').style,
                        counter = -1,
                        hexalen = hexacode.length;
                        function auto(){
                            el.backgroundColor = hexacode[counter = ++counter % hexalen];
                        }
                        setInterval(auto, 3000);
    })();