<?php
$username = $usernameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["username"])){
        $usernameErr = "Username is required";

    }else {
        $username = htmlspecialchars(string: $_POST["username"]);
    }
}
?>

<form method ="post" action = "<?php echo htmlspecialchars(string: $_SERVER["PHP_SELF"]);?>">
    Username: <input type = "text" name ="username" value = "<?php echo $username; ?>">
    <span style="color:red;"><?php echo $usernameErr;?></span><br>
    <input type ="submit" value = "Submit">
</form>