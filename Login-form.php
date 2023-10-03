<html>
<head>
	<title>password</title>
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			
			justify-content:center;
			align-items:center;
			text-align:center;
			background-color:
			
			font-family: sans-serif;
			
		}
		.div-top{
			background: linear-gradient(to bottom, #66ccff 0%, #ff9999 100%);
			padding:15px;
			margin-top:25px;
			width:600px;
			paddin:16px;
			
			
			
			
		}
		form{
			
			padding:55px;
			height:300px;
			
			
			
		}
		form input{
			width:390px;
			padding:12px;
			font-size:20px;
			margin-bottom:7px;
			border-radius:8px;
			outline:none;
			background:transparent;
			border:2px solid white;
			font-family: sans-serif;
			
		}
		input[type="text"]::-webkit-input-placeholder{
			color:white;
		}
		input[type="password"]::-webkit-input-placeholder{
			color:white;
		}
		.submit{
			background: linear-gradient(to bottom, #009999 0%, #0066ff 100%);
			color:white;
			outline:none;
			border:1px solid blue;
			cursor:pointer;
			font-family: sans-serif;
			font-size:24px;
		}
		.submit:hover{
			background: linear-gradient(to bottom, #009998 0%, #0055ff 100%);
			
		}
		a{
			text-decoration:none;
			font-size:24px;
			
			background: linear-gradient(to bottom, #336699 0%, #cc6699 100%);
			color:white;
			padding:12px 60px;
			border-radius:8px;
			
			
		}
		.div-top{
			filter:drop-shadow(2px 2px 5px);
		}
		
		.show{
			color:white;
			margin-left:-180;
			margin-top:-20px;
		}
		.check{
			margin-left:-350px;
			font-size:20px;
			margin-bottom:-20px;
		}

	</style>
	
	
</head>
<body>
<center>
	<div class="div-top" id="sideNav">
		<form method="POST">
			<input type="text" name="username" placeholder="username" required><br>
			<input type="password" id="myInput" name="password" placeholder="password" required><br> <input class="check"  type="checkbox" onclick="myFunction()"><br><span class="show">Show Password</span><br>
			<input id="menuBtn" class="submit" type="submit" name="submit" value="Log in"><br><br>
			


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>	
			
			
			
			
			
			
			
	<script>
		var menuBtn = document.getElementById("menuBtn");
		var sideNav = document.getElementById("sideNav");
		
		sideNav.style.margin-top="25px";
		menuBtn.onclic = function(){
			if(ideNav.style.margin-top == "25px";){
				ideNav.style.margin-top="-30px";
			}
			else{
				ideNav.style.margin-top="25px";
			}
		}
		
	</script>
	
	<?php
		
		if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(($username == 'username') && ($password=='1234')){
				
				/*include_once('output.php');*/
				echo"<a href='output.php'>Open Admin Pannel</a><br><br><br><a href='http://localhost/web-server/registration-form/upload5.5/Login-form.php'>Log out</a>";
			}
			else{
				echo"<p style='color:white;font-size:20px; font-weight:bold;'>your usename or password is incorrect?</p>";
			}
	
	
		}
	?>
	
	
	
			</form>
	</div>
</center>	
</body>
</html>