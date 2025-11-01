<?php include('database.php'); ?>
<?php
$id = $_GET['id'];
$meal = $conn->query("SELECT * FROM meals WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $calories = $_POST['calories'];
    $food_type = $_POST['food_type'];

    $conn->query("UPDATE meals SET name='$name', type='$type', calories='$calories', food_type='$food_type' WHERE id=$id");
    echo "<div class='alert alert-success'>Meal updated successfully!</div>";
}
?>

<form method="POST" class="card p-4 col-md-6">
  <input class="form-control mb-3" name="name" value="<?= $meal['name'] ?>">
  <select class="form-select mb-3" name="type">
    <option><?= $meal['type'] ?></option><option>breakfast</option><option>lunch</option><option>dinner</option>
  </select>
  <input class="form-control mb-3" name="calories" value="<?= $meal['calories'] ?>">
  <select class="form-select mb-3" name="food_type">
    <option><?= $meal['food_type'] ?></option><option>veg</option><option>non-veg</option>
  </select>
  <button class="btn btn-success w-100">Update</button>
</form>
