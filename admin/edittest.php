<?php
include('dbconfig.php');

$id = $_GET['id'] ?? null;

if (!$id) {
  echo "<script>alert('No test ID specified'); window.location.href='productlist.php';</script>";
  exit;
}

// Fetch existing test data
$query = mysqli_query($con, "SELECT * FROM lab_tests WHERE id='$id'");
$row = mysqli_fetch_assoc($query);

if (!$row) {
  echo "<script>alert('Test not found'); window.location.href='productlist.php';</script>";
  exit;
}

// Handle form submission
if (isset($_POST['update'])) {
  $test_name = $_POST['test_name'];
  $prize = $_POST['prize'];
  $offer = $_POST['offer'];

  $update = mysqli_query($con, "UPDATE lab_tests SET 
      test_name='$test_name', 
      prize='$prize', 
      offer='$offer' 
      WHERE id='$id'");

  if ($update) {
    echo "<script>alert('Test updated successfully'); window.location.href='productlist.php';</script>";
  } else {
    echo "<script>alert('Failed to update');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Lab Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Lab Test</h2>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Test Name</label>
      <input type="text" name="test_name" value="<?= htmlspecialchars($row['test_name']) ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Prize</label>
      <input type="text" name="prize" value="<?= htmlspecialchars($row['prize']) ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Offer</label>
      <input type="text" name="offer" value="<?= htmlspecialchars($row['offer']) ?>" class="form-control">
    </div>

    <button type="submit" name="update" class="btn btn-success">Update Test</button>
    <a href="productlist.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>
