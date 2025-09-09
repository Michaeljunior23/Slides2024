
<?php
// success.php
session_start();
include("templates/header.php");
if (isset($_SESSION['data'])) {
  $data = $_SESSION['data'];
  echo "<h2>Profile Submitted Successfully</h2>";
  echo "<p><strong>Name:</strong> {$data['name']}</p>";
  echo "<p><strong>Email:</strong> {$data['email']}</p>";
  echo "<p><strong>Course:</strong> {$data['course']}</p>";
  echo "<p><strong>Gender:</strong> {$data['gender']}</p>";
  echo "<img src='{$data['image']}' width='150' alt='Profile Image'>";
  session_destroy();
} else {
  echo "<p>No data found.</p>";
}
include("templates/footer.php");
?>