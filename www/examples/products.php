<?php 
   $itemPrices = array (
    "baseball bat - 10.15",
    "funny hat - 2.15",
    "hamburger - 8"
)
?>
<h1>All products</h1></body>
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
