<?php
  function dbConnect(){
    return new PDO("mysql:host=localhost;dbname=PHP-challenge;charset=utf8", 
      'root', 
      '', 
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  }

  function queryUsers($type){
    $db = dbConnect();

    if($type == 'ADMIN'){
      $query = $db->query("SELECT * FROM `users`");
    }
    else{
      $query = $db->prepare("SELECT * FROM `users` WHERE id=?");
      $query->execute([$userId]);
    }

    return $query->fetchAll();
  }

  function queryUserById($id){
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM `users` WHERE id=?");
    $query->execute([$id]);

    return $query->fetch();
  }

?>


<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>
