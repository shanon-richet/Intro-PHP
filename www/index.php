<?php 
    $navBar = array(
        "Home" => "../index.php",
        "Contact" => "form.php",
        "Students" => "students.php",
        "Products" => "products.php",
        "Login" => "form.php"
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href= "style.css" rel= "stylesheet">
</head>
<body>
    <h1>Welcome</h1>
    <ul>
    <?php
        foreach ($navBar as $title => $path) {
        ?>
            <li>
                <a href="./examples/<?php echo $path; ?>"><?php echo $title; ?></a>
            </li>
        <?
        }
    ?>
    </ul>  
</body>
</html>