<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Submitted Data</title>
</head>
<body>
    <h2>Submitted Comments</h2>
    <?php
    $file = 'data.txt';

    if (file_exists($file)) {
        $data = file_get_contents($file);
        echo nl2br(htmlspecialchars($data));
    } else {
        echo "No data has been submitted yet.";
    }
    ?>
    <br><br>
    <a href="file_form.html">Back to Form</a>
</body>
</html>
