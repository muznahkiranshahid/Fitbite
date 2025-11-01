<?php
include('database.php');
$id = $_GET['id'];
$conn->query("DELETE FROM meals WHERE id=$id");
header("Location: view_meals.php");
exit;
?>
