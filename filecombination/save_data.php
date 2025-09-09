<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $index = htmlspecialchars($_POST['index']);
    $comment = htmlspecialchars($_POST['comment']);

    $entry = "Username: $username\nIndex Number: $index\nComment: $comment\n-----------------------\n";

    file_put_contents('data.txt', $entry, FILE_APPEND | LOCK_EX);

    echo "Your comment has been saved successfully!<br><br>";
    echo '<a href="view_data.php">Click here to view all submissions</a>';
} else {
    echo "Invalid request.";
}
?>
