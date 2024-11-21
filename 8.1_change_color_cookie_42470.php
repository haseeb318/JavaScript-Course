<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Example Cookie</title>
</head>
<body>

	<select id="color" onchange="getColor()">
		<option value="Select Color">---Select Color---</option>
		<option value="cyan">Cyan</option>
		<option value="lightgreen">Light Green</option>
		<option value="skyblue">Sky Blue</option>
	</select>

	<script type="text/javascript">


		function getColor(){
			var value=document.getElementById("color").value;

			if(value != "Select Color"){
				document.bgColor = value;
				document.cookie = "color=" + value;
			}
		}

		window.onload = function(){
				if(document.cookie.length != 0){
					var array = document.cookie.split("=")
					document.getElementById("color").value = array[3];
					document.bgColor = array[3];
				}
			}
	</script>
</body>
</html>