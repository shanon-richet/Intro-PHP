<?php 
  $hoppers = array("Léon", "Dylan", "Victor", "Martin", "Esteban", "Kevin", "Aubry", "Shanon", "Youssef", "Mohammad", "Hanna", "Axel");
?>

<h1>List of all Students </h1>
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

