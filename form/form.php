<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <h2>Output is on the same page</h2>

    <form action="" method="POST">
        <label for="firstname">First name:</label> <br>
        <input type=" text" id="firstname" name="firstname"> <br>

        <label for="lastname">Last name:</label> <br>
        <input type="text" id="lastname" name="lastname"> <br>

        <label for="password">Password:</label> <br>
        <input type="password" id="password" name="password"> <br> <br>
        <input type="submit" value="submit">

</form> 
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo htmlspecialchars($_POST["firstname"])  . "<br>";
    echo htmlspecialchars($_POST["lastname"])   . "<br>";

}

?>