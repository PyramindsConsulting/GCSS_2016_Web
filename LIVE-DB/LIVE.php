<?php
	//echo "Started<br>";
	$servername = "182.50.133.85";
	$username = "wordpress_f0Div";
	$password = "wordpress_a85Div";
	$dbname = "wordpress_f0Div";
	
	$name = $_POST["name"];
	$mobile = $_POST["tel"];
	$email = $_POST["email"];
	$location = $_POST["city"];

	// Create connection
	//$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	/*if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if ($conn) {
	$sql = "INSERT INTO live_db (name, mobile, email, location)
	VALUES ('$name', '$mobile', '$email', '$location')";
	}*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO live_db
    VALUES
    ( '$name', '$mobile', '$email', '$location' )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Thank you ! Redirecting to LIVE in 5 Sec";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
	header('refresh: 5; url=http://www.spiritualcongress.org/LIVE-DB/LIVE-Page.html'); 
?>