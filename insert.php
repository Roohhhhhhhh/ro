<html>
<head>
<title>Add Feedback</title>
<style>
	h1{
    padding-top: 20%;
    color: green;
    font-size:x-large;
    font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
}
body{
    background: url("bgimg6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    align-content: center;
}
	</style>
</head>
<body>
<?php
//including the database connection file
include_once("config.php");
$fback = $_POST['fback'];

//insert data to database
$ins_query="INSERT INTO data(Comments) VALUES('$fback') ";
$result = mysqli_query($mysqli,$ins_query);

//display success message

?>
<center><h1>THANK YOU!!!</h1></center>
<center><h2 style="color:green">Your feedback means a lot to us:)</h2></center>
</body>
</html>