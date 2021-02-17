<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    $.ajax({
        url: 'http://192.168.0.10:8545',
        type: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        dataType: 'json',
        data: JSON.stringify({
            "jsonrpc" :  "2.0" ,
             "method" :  "user.login" ,
             "params" :  { 
                "user" :  "Admin" ,
                 "password" :  "zabbix" 
            } ,
             "id" :  1 ,
             "auth" :  null 
        }),
        success: function(data) {
            console.log(data);
        }
    });
</script>
