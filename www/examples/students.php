<?php 
  $hoppers = array("Léon", "Dylan", "Victor", "Martin", "Esteban", "Kevin", "Aubry", "Shanon", "Youssef", "Mohammad", "Hanna", "Axel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>List of all students</h1>
    <ul>
    <?php
        foreach ($hoppers as $name => $path) {
        ?>
            <li>
                <h4><?php echo $path; ?></h4>
            </li>
        <?
        }
    ?>
    </ul>  
</body>
</html>