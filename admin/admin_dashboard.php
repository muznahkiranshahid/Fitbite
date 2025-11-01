<?php include('database.php'); ?>
<?php include('header.php'); // optional if you separate layout ?>

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
          $count = $conn->query("SELECT COUNT(*) as total FROM meals WHERE food_type='veg'")->fetch_assoc();
          echo $count['total'];
        ?>
      </p>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 text-center">
      <h4>Non-Veg Meals</h4>
      <p class="display-6 text-success">
        <?php
          $count = $conn->query("SELECT COUNT(*) as total FROM meals WHERE food_type='non-veg'")->fetch_assoc();
          echo $count['total'];
        ?>
      </p>
    </div>
  </div>
</div>
