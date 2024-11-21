<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Example Cookie max-age</title>
</head>
<body>

	<input type="button" value="Set Cookie" onclick="setCookie()">
	<input type="button" value="Get Cookie" onclick="getCookie()">

	<script type="text/javascript">
		function setCookie(){
			/*Format to set max-age: seconds*minutes*hours*days */
			document.cookie = "companyName=LearnVern;max-age=" + (60*60) + ";";
		}



		function getCookie(){
			if(document.cookie.length != 0){
				alert(document.cookie);
			}else{
				alert("Cookie is not set");
			}
		}
	</script>
</body>
</html>