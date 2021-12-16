
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro PHP</title>
  <link href= "style.php" rel= "stylesheet" type= "text/css" media= "all">
</head>
<body>
  <h1><?php date('d/m/Y'); ?></h1>

  <?php include('includes/home.php'); ?>

  <div>
    <p><?php echo generateLoremIpsum(14); ?></p>
  </div>
</body>
</html>