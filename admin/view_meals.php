<?php include('database.php'); ?>

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
<h2 class="mb-4">All Meals</h2>

<table class="table table-bordered table-striped align-middle">
  <thead class="table-success">
    <tr>
      <th>ID</th><th>Image</th><th>Name</th><th>Type</th><th>Calories</th><th>Food Type</th><th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $result = $conn->query("SELECT * FROM meals");
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
      <td>{$row['id']}</td>
      <td><img src='../assets/images/{$row['image']}' width='60' class='rounded'></td>
      <td>{$row['name']}</td>
      <td>{$row['type']}</td>
      <td>{$row['calories']}</td>
      <td>{$row['food_type']}</td>
      <td>
        <a href='edit_meal.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
        <a href='delete_meal.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
      </td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
