<h2> Form Submission Result</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);

    echo "First Name: " . $firstname . "<br>";
    echo "Last name: " . $lastname . "<br>";
// Optional: Don't echo password directly for privacy

}
?>
