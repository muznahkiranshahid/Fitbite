<?php
include('database.php'); // Database connection
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
    <a href="edit_meal.php">📋 Edit Meals</a>
    <a href="export_json.php">⬇ Export JSON</a>
    <a href="import_json.php">⬆ Import JSON</a>
  </div>

  <div class="content">
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h4>Total Meals</h4>
          <p class="display-6 text-success">
            <?php
              $count = $conn->query("SELECT COUNT(*) as total FROM meals")->fetch_assoc();
              echo $count['total'];
            ?>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h4>Total Veg Meals</h4>
          <p class="display-6 text-success">
            <?php
              $result = $conn->query("SELECT COUNT(*) as total FROM meals WHERE food_type='veg'");
if($result) {
    $count = $result->fetch_assoc();
    echo $count['total'];
} else {
    echo "Query failed: " . $conn->error;
}

            ?>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h4>Non-Veg Meals</h4>
          <p class="display-6 text-success">
            <?php
            $result = $conn->query("SELECT COUNT(*) as total FROM meals WHERE food_type='non-veg'");
if($result) {
    $count = $result->fetch_assoc();
    echo $count['total'];
} else {
    echo "Query failed: " . $conn->error;
}
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
