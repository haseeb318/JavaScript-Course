<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMPLE </title>
</head>
<body>
    Name: <input type="text" name="" id="name">
    Email: <input type="text" name="" id="emails">
    <input type="button" value="Set Cookies" onclick="setCookie()">
    <input type="button" value="Get Cookies" onclick="getCookies()">
    <script>
        function getCookies(){
            if (document.cookie.length !=0){
                alert(document.cookie)
            }
            else {
                alert("COOKIES is not set yet");
            }
        }
        function setCookies(){
            var info = "Name=" + document.getElementById('name').value + "
            ;Email =" + document.getElementById('email').value;
            document.cookie =info;

         
        }
        
     
       


    </script>
    

        
     
    


    
    
</body>
</html>