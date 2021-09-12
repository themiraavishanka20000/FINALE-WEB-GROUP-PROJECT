<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=devic-width,initial-sacle=1.0">
	<title> thanks</title>
	<style>
		body
	{
	margin:0;
	padding:0;
	}
	section
	{
	width:100%;
	height:100vh;
	background: url(mm.jpg);
	background-size:cover;
	}

	</style>
</head>

<body>

<?php 
$servername="localhost";
$username="root";
$password="";

$con = mysqli_connect($servername,$username,$password);
if($con)
{

}

$Name = $_POST['fname'];
$Con = $_POST['coun'];
$Mail = $_POST['mail'];
$day = $_POST['D_day'];
$mon = $_POST['D_mon'];
$y = $_POST['D_y'];
$gen = $_POST['gender'];
$Pay = $_POST['pay'];
$holdname = $_POST['holdername'];
$placename = $_POST['placeholder'];
$CVC = $_POST['cvc'];
$d_price = $_POST['D_price'];


$usedb="USE donate";
mysqli_query($con,$usedb);

$inset = "INSERT INTO donate_page VALUES('$Name','$Con','$Mail','$day','$mon','$y','$gen','$Pay','$holdname','$placename','$CVC','$d_price');";

if(mysqli_query($con,$inset)){
   
}

?>

	<section>
 	<center>
		<img src="./correct.png"alt="correct" width="300px"height="300px">
		<h1 style="color: #2ecc71;"> Thank you !</h1>
		<h3 style="color: blueviolet;">your donation money has been successfully</h3>
		<h3><a style="color:blueviolet;">Go Back</a></h3>
	</center>
  
</section>
</body> 
</html>



