// process.php
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $course = $_POST['course'];
  $gender = $_POST['gender'];

  $upload_dir = "uploads/";
  $file = $_FILES['profile'];
  $filename = basename($file['name']);
  $target_file = $upload_dir . time() . "_" . $filename;

  $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($filetype, $allowed) && $file['error'] == 0) {
    move_uploaded_file($file['tmp_name'], $target_file);
    $_SESSION['data'] = [
      'name' => $name,
      'email' => $email,
      'course' => $course,
      'gender' => $gender,
      'image' => $target_file
    ];
    header("Location: success.php");
  } else {
    echo "File upload failed. Only JPG/PNG allowed.";
  }
} else {
  header("Location: form.php");
  exit();
}
?>