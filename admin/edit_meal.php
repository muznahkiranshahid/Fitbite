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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FitBite Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #7DC579;
      --accent: #FFD54F;
      --light: #f8fff7;
      --shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    body {
      background-color: var(--light);
      font-family: 'Poppins', sans-serif;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      background: var(--primary);
      color: white;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 8px;
      margin: 4px 10px;
    }
    .sidebar a:hover, .sidebar a.active {
      background: var(--accent);
      color: black;
    }
    .content {
      margin-left: 260px;
      padding: 20px;
    }
    .card {
      border: none;
      box-shadow: var(--shadow);
      border-radius: 12px;
    }
  </style>
</head>
<body>
<div class="sidebar">
  <h3 class="text-center fw-bold mb-4">🥗 FitBite</h3>
  <a href="admin_dashboard.php" class="active">🏠 Dashboard</a>
  <a href="add_meal.php">➕ Add Meal</a>
  <a href="view_meals.php">📋 View Meals</a>
  <a href="export_json.php">⬇ Export JSON</a>
  <a href="import_json.php">⬆ Import JSON</a>
</div>
<div class="content">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



