<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validate name
    if (empty(trim($_POST["name"]))) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $_POST["name"])) {
        $errors[] = "Name must contain only letters and spaces.";
    }

    // Validate age
    if (empty(trim($_POST["age"]))) {
        $errors[] = "Age is required.";
    } elseif (!is_numeric($_POST["age"])) {
        $errors[] = "Age must be numeric.";
    } elseif ($_POST["age"] <= 0) {
        $errors[] = "Age must be a positive number.";
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email format is invalid.";
    }

    // Validate URL
    if (empty(trim($_POST["url"]))) {
        $errors[] = "Website URL is required.";
    } elseif (!filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
        $errors[] = "Website URL format is invalid.";
    }

    // Display errors if any
    if (!empty($errors)) {
        echo "<h3>Errors Found:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        echo "<a href='form_val_ht.html'>Click here to go back</a>";
        exit;
    }

    // All validation passed
    echo "<h2>Form Submitted Successfully</h2>";
    foreach ($_POST as $key => $value) {
        echo "<strong>" . htmlspecialchars($key) . "</strong> => " . htmlspecialchars($value) . "<br>";
    }
}
?>
