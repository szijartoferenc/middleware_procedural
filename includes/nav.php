<?php 
defined('IN_PRODUCTION') or die('No direct access allowed!');
?>
<nav>
    <ul>
      <li><a href="/index.php">Kezdőlap</a></li>
      <li><a href="/public.php">Információk</a></li>
      <?php
      if( !isset($_SESSION["user"]) ) { ?>
      <li><a href="/login.php">Belépés</a></li>
      <?php } else { ?>
      <li><a href="/protected.php">Profilom</a></li>
      <li><a href="/logout.php">Kilépés</a></li>
      <?php } ?>
    </ul>
  </nav>