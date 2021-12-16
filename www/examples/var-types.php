<?php 
  $var = 'Hello';

  // Displays a value on the page, echo is the most basic function
  echo $var;

  // For advanced debugging 
  var_dump($var);
  print_r($var);



  // String
  $firstName = 'Jean-Marc';
  $lastName = 'Hopper'

  // String concatenation
  $fullName = $firstName . " " . $lastName // Jean-Marc Hopper

  // Boolean
  $isAdult = true;
  $lovesPHP = false;

  // Number 
  $age = 23;
  $pi = 3.14159;

  // Array
  $hoppers = array("Léon", "Dylan", "Victor", "Martin", "Esteban", "Kevin", "Aubry", "Shanon", "Youssef", "Mohammad", "Hanna", "Axel");
  // $hoppers[1]; = Léon
  // count(hoppers); 12

  // Associative arrays
  $itemPrices = array(
    "baseball bat" => 10.5,
    "funny hat" => 2.15,
    "hamburger" => 8
  )
  // $itemPrices["baseball bat"] = 10.5

  foreach ($itemPrices as $item => $price) {
    echo $item;
    echo $price;
  }






  function sayHello($name){
    return "Hello " . $name;
  }

  for ($i=0; $i < 5; $i++) { 
    if($i % 2 == 0){
      sayHello($i);
    }
  }


  // Some magic variables (superglobals)
  $_COOKIE['cookie-name'];    // Access to a cookie (named cookie-name)
  $_SESSION['session-name'];  // Access to a session (named session-name)
  $_POST['field-name'];       // Access to the POST request body (to a field, named field-name)
  $_SERVER['SERVER_ADDR'];    // Access to some server constants (The URL of the server)
?>