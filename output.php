<html>
<head>
 <marquee direction="right" scrollamount="10"
    onmouseover="this .stop ()" onmouseout="this.start ()">Blood Bank Management
</marquee>
<html lang="en">
<head>
  <title>Search Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styel.css">
</head>
<body>
<div class="container">
  <form class="form-inline" method="post" action="search.php">
    <input type="text" name="roll_no" class="form-control" placeholder="Search Roll">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
</body>
</html>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","student");
if(count($_POST)>0) {
$roll_no=$_POST[roll_no];
$result = mysqli_query($conn,"SELECT * FROM user_data where roll_no='$roll_no' ");
}
?>

</table>
</body>
</html>
	<title>Registration Form</title>
	<style>
		table,th,tr,td{
			border:1px solid red;
			border-collapse:collapse;
			padding:10px;
			
		}
		td{
			width:500px;
		text-align:center;
		}
		th{
			background-color:gray;
			color:white;
		}
	div{
		background:blue;
		height:100px;
		color:white;
		display:flex;
		align-items:center;
		justify-content:center;
		text-align:center;
	}
	a{
		text-decoration:none;
		color:white;
		background:red;
		padding:10px;
		border-radius:10px;
	}
	</style>
</head>
</body>

	<center>
	<div><h1>Student Detail's</h1><a href="index.php">Registration</a></div>
		<table>
			
			<th>Name</th>
			<th>Roll</th>
			<th>Department</th>
			<th>Semester</th>
			<th>Shift</th>
			<th>Gender</th>
			<th>Mobile Number</th>

			<?php
				
				$host="localhost";
				$user="root";
				$pass="";

				$link=mysqli_connect($host,$user,$pass);
				mysqli_select_db($link,"form");


				$rs=mysqli_query($link,"select * from info");
				while($rs2=mysqli_fetch_array($rs)){
					
					?>
					<tr>
						<td><?php echo $rs2['Name'];?></td>
						<td><?php echo $rs2['Roll'];?></td>
						<td><?php echo $rs2['Department'];?></td>
						<td><?php echo $rs2['Semester'];?></td>
						<td><?php echo $rs2['Shift'];?></td>
						<td><?php echo $rs2['Gender'];?></td>
						<td><?php echo $rs2['Mobile_number'];?></td>
					</tr>
			




				<?php

				}


				?>

		</table>
		
	</center>
	
	</body>
	</html>