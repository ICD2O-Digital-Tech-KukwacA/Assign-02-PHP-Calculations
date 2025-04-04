<?php
	// get the radiuses from the textfields
	$radius = $_POST['radius'];
	$radius = $_POST['radius_2'];

	// calculate the area
	const PI = 3.14
    $area = PI * radius**2
	$perimeter = 2 * PI * radius_2
?>
<h3>Results:</h3>
The area of the circle is <?php echo "$area" ?>cm<sup>2</sup>.
The perimeter of the circle is <?php echo "$perimeter" ?>cm.