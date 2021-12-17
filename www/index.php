<?php 
    $navBar = array(
        "Home" => "../index.php",
        "Contact" => "login.php",
        "Students" => "students.php",
        "Products" => "products.php",
        "Login" => "form.php",
        "Registration" => "registration.php"
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

    <h1>Fill in this form</h1>
  <form action="examples/form-action.php" method="post">
    <div>
      <label for="nickname">Nickname :</label>
      <input type="text" name="nickname" />
    </div>
    <div>
      <label for= "password">Password</label>
      <input type= "password" name= "password">
    </div>
    <input type="submit" value="Send!">
  </form>

  <?php
include('examples/products.php');
?>

  <?php
  include_once('examples/connexion.php');
?>

<table>
  <?php
    $results = queryUsers('ADMIN');

    foreach($results as $row){
    ?>
    <tr>
    <?php
      foreach($row as $col){
        echo "<td>$col</td>";
      }
    ?>
      <td><a href="details.php?id= <?php echo $row["id"]; ?>">details</a></td>
      <td><a href="">edit</a></td>
    </tr>
    <?php
    }
  ?>
</table>



</body>
</html>
