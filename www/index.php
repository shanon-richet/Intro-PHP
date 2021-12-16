<?php 
    $examples = array(
        "includes" => "include-demo.php",
        "form" => "form.php",
        "phpinfo" => "phpinfo.php"
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach ($examples as $name => $path) {
        ?>
            <li>
                <a href="./examples/<?php echo $path; ?>"><?php echo $name; ?></a>
            </li>
        <?
        }
    ?>
    </ul>
</body>
</html>