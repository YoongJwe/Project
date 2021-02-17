<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Document</title>
</head>
<body>
    <script>
        var httpRe=null;

        function get(){
            if(window.ActiveObject){
                try{
                    return new ActiveXObject("Microsoft.XMLHTTP");
                }catch(e){
                    return null;
                }
            }else if(window.XMLHttpRequest){
                return new XMLHttpRequest();
            }else{
                return null;
            }
        }
        
        httpRe=get();
        
        httpRe.onreadystatechange=callBackFunc;
        httpRe.open('GET', '/test2.php?name=hello', true);
        httpRe.send(null);

        function callBackFunc(){
            alert(httpRe.responseText);
        }
        


    </script>



</body>
</html>
