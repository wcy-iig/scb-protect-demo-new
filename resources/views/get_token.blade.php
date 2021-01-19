<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                loginsf(function(data) {
                    $.ajax({
                        type: "GET",
                        contentType: 'application/json',
                        url:'https://login.salesforce.com/services/apexrest/wsDroplead/leadProces',
                        cache :false,
                        headers: {'Authorization': 'Bearer '+data},
                        dataType: 'json',
                        success: function (data) {

                        },
                        error : function(jqXHR, textStatus, errorThrown) {
                            console.log('Error: '+jqXHR.status);
                            console.log('textStatus: '+textStatus)
                        }
                    });
                });
            });
        });

        function loginsf(fn){


            $.ajax({
                type: 'POST',
                crossOrigin: true,
                url: 'https://login.salesforce.com/services/oauth2/token',
                dataType: 'json',
                cache :false,
                data : {"grant_type":"password","client_id":"3MVG9kBt168mda_8J9udsdveviGy2Jmw2UJXNicivKpPoDRTtzmVLsL3hBVW1A7reQl1N9zdxMMEHsyhZU7Xp", "client_secret":"113FEC8F25DF38E3D50707ABBBE9892E302E0FF766AA999038436615B7F5BAA5","username":"tsm@ii.co.th.iigscb","password":"P@ssw0rd!?johvih6zqLNNmpEJnDQckIks6"},
                success : function (data) {
                    fn(data.access_token);
                },
                error : function (data, errorThrown,status) {

                }
            });
        }

    </script>
</head>
<body>

<div id="div1"><h2>jQuery AJAX test</h2></div>

<button>Get External Content</button>

<script>

</script>
</body>
</html>