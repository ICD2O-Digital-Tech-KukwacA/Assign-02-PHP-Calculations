<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Assign-02-PHP-Calculations">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area and Perimeter of a Circle</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area and Perimeter of a Circle</h1>";
			echo "<h3>This program will calculate the area and perimeter of a circle.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./calculations.php" method="post" target="results">
      <label for="lblRadius">Radius (cm):</label>
      <input type="text" id="radius1" placeholder="Enter the radius (cm)" name="Radius"><br><br>
      <label for="lblRadius2">Radius (cm):</label>
      <input type="text" id="radius_2" placeholder="Enter the radius (cm)" name="Radius"><br><br>
      <input type="submit" value="Calculate Area and perimeter">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The area of the circle is + $area + cm<sup>2</sup>
        The perimeter of the circle is + $perimeter + cm
      </iframe>
	</body>
</html>