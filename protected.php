<?php 
    define('IN_PRODUCTION', true);
    
    session_start();

    $config = include("config.php");
    $middlewares = include("middlewares.php");

    call_user_func($middlewares["auth"]);
?><!DOCTYPE html>
<html lang="en">
<head>
 <?php include("includes/meta.php") ?>
</head>
<body>
<?php include("includes/nav.php") ?>

<section>
    <h1><?php print $_SESSION["user"]["name"]?>, üdvözöljük a profil oldalon!</h1>
   
  </section>
</body>
</html>
