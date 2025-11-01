<?php include('database.php'); ?>
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
