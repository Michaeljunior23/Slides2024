
<?php
// form.php
  include("templates/header.php");
?>
<form action="process.php" method="POST" enctype="multipart/form-data">
  <label>Full Name:</label>
  <input type="text" name="fullname" required><br>

  <label>Email:</label>
  <input type="email" name="email" required><br>

  <label>Course:</label>
  <select name="course"><br>
    <option value="Computer Science">Computer Science</option>
    <option value="Information Technology">Information Technology</option>
    <option value="Engineering">Engineering</option>
  </select><br>

  <label>Gender:</label><br>
  Male<input type="radio" name="gender" value="Male" required> <br>
  Female<input type="radio" name="gender" value="Female" required>
  <br><br>

  <label>Profile Picture:</label>
  <input type="file" name="profile" accept="image/*" required>

  <button type="submit">Submit</button>
</form>
<?php include("templates/footer.php"); ?>
