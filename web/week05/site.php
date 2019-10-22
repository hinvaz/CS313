<?php
session_start();

include 'db_access.php';
$restaurantId = $_GET["restaurantId"];

if (!isset($restaurantId)) {
	die("No site ID.");
}

$selected = array ();

?>

<html>
<head>
<title>Restaurant</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="back">
	<?php 
	include 'navbar.php';
	
	$stmt = $db->prepare("SELECT url FROM picture WHERE restaurant_id=:restaurantId");
	$stmt->bindValue(':restaurantId', $restaurantId, PDO::PARAM_STR);
	$stmt->execute();
	$stmt->bindColumn(1, $url);
	
	while ($stmt->fetch()) {
		echo "<img src='" . $url . "'>";
	}

	$stmt = $db->prepare("SELECT name, address, description FROM restaurant WHERE id=:restaurantId");
	$stmt->bindValue(':restaurantId', $restaurantId, PDO::PARAM_STR);
	$stmt->execute();
	$stmt->bindColumn(1, $name);
	$stmt->bindColumn(2, $address);
	$stmt->bindColumn(3, $description);
	
	while ($stmt->fetch()) {
		echo "<h2>" . $name . "</h2>";
		echo "<h3>Description</h3>";
		echo "<p>Address: " . $address . "</p>";
		echo "<p>" . $description . "</p>";
	}
	?>
	
</div>

</body>
</html>