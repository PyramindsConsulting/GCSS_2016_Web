<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Order ID</th><th>Order Date</th><th>Amount</th><th>Name</th><th>Address</th><th>City</th><th>State</th><th>Country</th><th>Zip</th><th>Email</th><th>Mobile</th><th>Main Program Flat</th><th>Checkin Date</th><th>Checkout Date</th><th>No. of Days</th><th>No. of Persons</tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
	
	$servername = "182.50.133.85";
	$username = "wordpress_f0Div";
	$password = "wordpress_a85Div";
	$dbname = "wordpress_f0Div";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT order_id, order_date, amount, name, address, city, state, country, zip, email, mobile, main_pgm_val, check_in_date, check_out_date, no_of_days, no_of_persons FROM suvarnamukhi"); 
    $stmt->execute();
	// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>