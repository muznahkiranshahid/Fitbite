<?php
include('database.php');
$result = $conn->query("SELECT * FROM meals");
$meals = [];
while($row = $result->fetch_assoc()) $meals[] = $row;
file_put_contents("meals.json", json_encode($meals, JSON_PRETTY_PRINT));
echo "<div class='alert alert-success'>Data exported to meals.json successfully!</div>";
?>
