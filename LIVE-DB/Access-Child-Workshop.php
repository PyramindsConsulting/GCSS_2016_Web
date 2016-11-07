<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Order ID</th><th>Order Date</th><th>Amount</th><th>Parent Name</th><th>Child-1</th><th>Age-1</th><th>Gender-1</th><th>Child-2</th><th>Age-2</th><th>Gender-2</th><th>Child-3</th><th>Age-3</th><th>Gender-3</th><th>Child-4</th><th>Age-4</th><th>Gender-4</th><th>Address</th><th>City</th><th>State</th><th>Country</th><th>Zip</th><th>Email</th><th>Mobile</th><th>Main Program Value</tr>";

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
	$stmt = $conn->prepare("SELECT order_id, order_date, amount, parent_name, child1, age1, gender1, child2, age2, gender2, child3, age3, gender3, child4, age4, gender4, address, city, state, country, zip, email, mobile, main_pgm_val FROM mm_workshop_2015"); 
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