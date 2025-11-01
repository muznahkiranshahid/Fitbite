<?php
include('database.php');
$json = file_get_contents("meals.json");
$meals = json_decode($json, true);

foreach($meals as $m){
  $name = $m['name'];
  $type = $m['type'];
  $cal = $m['calories'];
  $protein = $m['protein'];
  $carbs = $m['carbs'];
  $fat = $m['fat'];
  $food_type = $m['food_type'];
  $image = $m['image'];

  $conn->query("INSERT INTO meals (name, type, calories, protein, carbs, fat, food_type, image)
                VALUES ('$name','$type','$cal','$protein','$carbs','$fat','$food_type','$image')");
}
echo "<div class='alert alert-success'>Data imported from JSON successfully!</div>";
?>
