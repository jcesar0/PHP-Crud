<?php
require __DIR__ .  "/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row"> <?php 
                include_once "App/views/newTarefa.php";
                include_once "App/views/readTarefa.php"; ?> 
        </div>

        <hr>
        
        <div class="row"> <?php 
                include_once "App/views/manageTarefa.php"; ?> 
        </div>
    
    </div>

    <footer>
    <div class="text-center py-5">
        © 2020 Copyright:
    </div>
        <script src="js/bootstrap.min.js"></script>
    </footer>
</body>
</html>