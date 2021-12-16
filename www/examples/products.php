<?php 
   $itemPrices = array (
    "baseball bat", 10.5,
    "funny hat", 2.15,
    "hamburger", 8
)
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
    <h1>All products</h1>
    <ul>
    <?php
        foreach ($itemPrices as $products => $path) {
        ?>
            <li>
                <h4 class= "products_name"><?php echo $path; ?></h4>
            </li>
        <?
        }
    ?>
    </ul>  
</body>
</html>