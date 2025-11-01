<?php include('database.php'); ?>

<h2 class="mb-4">Add New Meal</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $calories = $_POST['calories'];
    $protein = $_POST['protein'];
    $carbs = $_POST['carbs'];
    $fat = $_POST['fat'];
    $food_type = $_POST['food_type'];
    $image = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$image);

    $conn->query("INSERT INTO meals (name, type, calories, protein, carbs, fat, food_type, image) 
                  VALUES ('$name','$type','$calories','$protein','$carbs','$fat','$food_type','$image')");
    echo "<div class='alert alert-success'>Meal added successfully!</div>";
}
?>

<form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm col-md-6">
  <input class="form-control mb-3" name="name" placeholder="Meal Name" required>
  <select class="form-select mb-3" name="type" required>
    <option value="">Select Type</option>
    <option>breakfast</option><option>lunch</option><option>dinner</option>
  </select>
  <input class="form-control mb-3" type="number" name="calories" placeholder="Calories" required>
  <input class="form-control mb-3" type="number" name="protein" placeholder="Protein (g)">
  <input class="form-control mb-3" type="number" name="carbs" placeholder="Carbs (g)">
  <input class="form-control mb-3" type="number" name="fat" placeholder="Fat (g)">
  <select class="form-select mb-3" name="food_type" required>
    <option>veg</option><option>non-veg</option>
  </select>
  <input class="form-control mb-3" type="file" name="image" accept="image/*">
  <button class="btn btn-success w-100">Add Meal</button>
</form>
