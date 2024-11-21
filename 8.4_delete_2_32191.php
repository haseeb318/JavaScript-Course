<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Example Deleting a Cookie</title>
</head>
<body>
	<input type="button" value="Set Cookie" onclick="setCookie()">
	<input type="button" value="Get Cookie" onclick="getCookie()">

	<script type="text/javascript">
		function setCookie(){
			document.cookie = "firstName=ABCD;max-age=0";
		}
		function getCookie(){
			if(document.cookie.length != 0){
				alert(document.cookie);
			}else{
				alert("Cookie is not set yet");
			}
		}
	</script>
</body>
</html>