<?php 
    define('IN_PRODUCTION', true);
    
    session_start();

    $config = include("config.php");
    $middlewares = include("middlewares.php");

    call_user_func($middlewares["guest"]);
?><!DOCTYPE html>
<html lang="en">
<head>
 <?php include("includes/meta.php") ?>
</head>
<body>
<?php include("includes/nav.php") ?>

  <?php 
    if( $_SERVER["REQUEST_METHOD"] === 'POST' ) {
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $connection = $config["connection"];

        if( filter_var( $email, FILTER_VALIDATE_EMAIL ) 
            && 
            strlen($password)){
                if( $user = mysqli_fetch_assoc( 
                    mysqli_query(
                        $connection, 
                        "select * from users where email = '".mysqli_real_escape_string(
                            $connection, $email
                            )."' limit 0,1") 
                        ) ) {
                            if( password_verify($password, $user["password"]) ){
                                $_SESSION["user"] = $user;
                                header("location: /protected.php");
                            }else{
                                $_SESSION["error"] = true;
                                header("location: ".$_SERVER["HTTP_REFERER"]); 
                                exit;
                            }
                        }
            } else {
                $_SESSION["error"] = true;
                header("location: ".$_SERVER["HTTP_REFERER"]);
                exit;
            }
    }
  ?>  

  <section>
    <h1>Üdvözöljük a belépő oldalon!</h1>
    <form action="" method="post" novalidate> 

    <?php if( isset($_SESSION["error"]) ) { ?>
        <div class="error-box"> 
            <span class="error-icon">&#x26A0;</span>
            <p class="error-message">Hiba történt!</p>
        </div>
    <?php 
    unset($_SESSION["error"]);
    }
    ?>

    <h3>Belépés</h3>
    <div class="form-group mt-4">
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Jelszó:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <input type="submit" value="Belépés">
    </div>
  </form>
  </section>
</body>
</html>
