<!-- shahad hassan almoudi
     Umm-Al-Qura university  
	 -->
 
<!DOCTYPE html>

<html>
	
<head>
		<title>Arm control interface design</title> <!-- page title-->
		<meta charset="utf-8">
		<img src="as.png" alt="smart method logo" class="center" >
        <link rel="stylesheet" href="style.css" >   <!--connect html whith css-->
		
</head>
<body>
	
		<form  method="post" action="connect.php" class="slidecontainer">
		
		<!-- create  range slider :--->
		<div class="slidecontainer"> 
		<text>motor1: </text>
		<input type="range" min="0" max="180" value="90" class="slider" name="motor1"> 
		</div>
		
		<div class="slidecontainer"> 
		<text>motor2:</text>
		<input type="range" min="0" max="180" value="90" class="slider" name="motor2"> 
		</div>
		
		<div class="slidecontainer"> 
		<text>motor3:</text>
		<input type="range" min="0" max="180" value="90" class="slider" name="motor3"> 
		</div>
		
		<div class="slidecontainer"> 
		<text>motor4: </text>
		<input type="range" min="0" max="180" value="90" class="slider" name="motor4"> 
		</div>
		
		<div class="slidecontainer"> 
		<text>motor5:</text>
		<input type="range" min="0" max="180" value="90" class="slider" name="motor5"> 
		</div>
		
		<div class="slidecontainer"> 
		<text>motor6:</text>
		<input type="range" min="0" max="180" value="0" class="slider" name="motor6">
		</div>
		
		<!-- save button -->
		<div class="slidecontainer">
		<input value="save" type="submit" name="save">
		</div>
		<!-- on button -->
		<div class="slidecontainer">
		<input value="on" type="submit"  name="on">
		</div>
		
		
		</form>

<!-- j s -->	
<script>
var slider = document.getElementById("sl");
var output = document.getElementById("demo");
// Display default value for slider.
output.innerHTML = slider.value; 
// Update slider value
slider.oninput = function() { 
output.innerHTML = this.value;}
</script>
		
		</form>
</body>
</html>