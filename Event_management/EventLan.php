<html>
	<head>
		<style>
			.header{
				border:2px solid black;
				background-color:#b8860b;
				padding-left:20%;
				padding-right:10%;
				padding-top:30px;
				padding-bottom:30px;
				width:30%;
				margin-left:20%;
				font-size:45px;
				}
				
				p {
					
					
					margin-left:0%;
					font-size:25px;
					text-align:CENTER;
					color: blue;	
					
					
					}
				h3{
				padding-top:10px;
					margin-left:0%;
					font-size:25px;
					text-align:CENTER;
					color: blue;	
					
				}
				
				.div{
			border:5px solid black;
			text-align:center;
			background-color:#b8860b;
			width:300px;
			padding:50px;
			margin-left:450px;
			margin-top:15px;
			
		}
		</style>
	</head>
	<body style="border:1px solid black">
		
		<h2 class="header"> LAN GAMING</h2>
	
		<p> <b>DETAILS:</b> <br>It involves lan games like mini-militia,dota2 and counterstrike go etc.<br>
		This tests your gaming skills and makes your mind sharper.Take advantage of this event and have unlimited fun
		<br><br>Enter your details below for participation. </p>
		
		<form method="post" action="#" class="div" >
				<h2> LAN GAMING</h2>
			<input type="text" name="Yname" placeholder="Name" style="width:230px;height:25px;border:2px solid grey;"/><br><br>
			<input type="text" name="Ename" placeholder=" Event Name" style="width:230px;height:25px;border:2px solid grey;" /><br><br>
			<input type="text" name="cls" placeholder=" Class and Roll no" style="width:230px;height:25px;border:2px solid grey;"/><br><br>
			<input type="Submit" name="participate" style="width:100px;height:30px"/><br>
			<label> Click here to check how many people participated</label><br>
			<input type="Submit" name="participate1" value="check" style="width:100px;height:30px"/><br>
			
		</form>
		
	</body>
</html>

<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="vesit_events";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "";
	if(isset($_POST['participate']))
	{
		$name1=$_POST['Yname'];
		$name2=$_POST['Ename'];
		$CRNO=$_POST['cls'];
		
		$sql="insert into l_gaming values ('$name1','$name2','$CRNO')";
		if ($conn->query($sql) === TRUE) {
				echo "<h1><center>You have successfully registered. THANKYOU </h1></center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
?>


<?php
$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="vesit_events";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "";
	if(isset($_POST['participate1']))
	{

$sql = "SELECT Name,class_rollno FROM l_gaming ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
				echo"<center><p>";
                echo "Name: " . $row["Name"]. "  ". $row["class_rollno"].  "" ;
				echo"</center></p>";
    }
} else {
    echo " <h1><center>No participants </center></h1>";
}
	}
$conn->close();
?>



