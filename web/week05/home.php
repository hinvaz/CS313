<html>
<head>
<title>Restaurants</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="back">
	<?php include 'navegation.php'; ?>

	
	<?php
	include 'db_access.php';
		// Henrique, Lucas and Leonardo worked together to come up with this part
	foreach ($db->query("SELECT * FROM state") as $row) {
		echo "<h3>" . $row["name"] . "</h3>";
		$stateId = $row["id"];
			
		foreach ($db->query("SELECT * FROM city WHERE state_id=$stateId") as $state_st) {
			echo "<h4>" . $state_st["name"] . "</h4>";
			echo "<ul>";
			$cityId = $state_st["id"];
				
			foreach ($db->query("SELECT * FROM restaurant WHERE city_id=$cityId") as $restaurant_row) {
				$restaurantId = $restaurant_row["id"];
				echo "<li><a href='site.php?restaurantId=$restaurantId'>" . $restaurant_row["name"] . "</a></li>";
			}
				
			echo "</ul>";
		}
	}
	?>
</div>

</body>
</html>