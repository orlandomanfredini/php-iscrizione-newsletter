<?php
session_start();
$email = $_SESSION['email'];
include __DIR__ . '/utilities.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ESIT</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h2>ESIT</h2>
    <?php if (checkEmail($email)){ ?>
        <div class="alert alert-success" role="alert">
            CORRECT EMAIL!!
        </div>
     <?php } else { ?>
        <div class="alert alert-danger" role="alert">
             REPEAT!!
        </div>
     <?php } ?>
    </div>
</body>
</html>