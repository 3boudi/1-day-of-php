<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <?php
        $first_name = "amin";
        $last_name = "halitim";
        $job="ing2";
        $age = 20;
        $city = "kais";
        $civilen = true;
        if ($civilen) {
            echo "<h1>Hello " . $first_name . " " . $last_name . "</h1>";
            echo "<p>You are " . $age . " years old.</p>";
            echo "<p>You are a civilian of " . $city . ".</p>";
        } else {
            echo "<h1>Hello " . $first_name . " " . $last_name . "</h1>";
            echo "<p>You are " . $age . " years old.</p>";
            echo "<p>You are not a civilian of " . $city . ".</p>";
        }
        ?>
        <button onclick="showAlert('<?php echo $first_name;?>','<?php echo $last_name; ?>','<?php echo $job; ?>')">WELCOME!</button>
    </div>
    <script src="script.js"></script>
</body>


