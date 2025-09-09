<?php

// Open the file in read mode
$file= fopen("gfg.txt", "a+");

if($file){
    echo "File opened successfully!";
    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}
?>
