<html>
<head>
<title>Restaurants</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="back">
	<?php include 'navbar.php'; ?>
	
	<?php
	include 'db_access.php';
		
	foreach ($db->query("SELECT * FROM state") as $state_row) {
		echo "<h3>" . $state_row["name"] . "</h3>";
		$stateId = $state_row["id"];
			
		foreach ($db->query("SELECT * FROM city WHERE state_id=$stateId") as $county_row) {
			echo "<h4>" . $county_row["name"] . "</h4>";
			echo "<ul>";
			$countyId = $county_row["id"];
				
			foreach ($db->query("SELECT * FROM restaurant WHERE city_id=$countyId") as $site_row) {
				$siteId = $site_row["id"];
				echo "<li><a href='site.php?siteId=$siteId'>" . $site_row["name"] . "</a></li>";
			}
				
			echo "</ul>";
		}
	}
	?>
</div>

</body>
</html>