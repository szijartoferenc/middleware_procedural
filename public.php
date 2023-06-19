<?php
define('IN_PRODUCTION', true);

session_start();

//$config = include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/meta.php") ?>
</head>

<body>
    <?php include("includes/nav.php") ?>

    <section class="infopage">
        <h1>Middleware procedurális környezetben</h1>
        
        <h3>Felhasznált technológia</h3>
        <ul>
            <li>PHP 8.0</li>
            <li>HTML 5</li>
            <li>CSS 3</li>
        </ul>

        <h3>Telepítés</h3>
        <ul>
            <li>Klónozd le a repót a gépedre.</li>
            <li>Hozz létre adatbázist, importáld az SQL dump-ot.</li>
            <li>Állítsd be a kapcsolat adatait a <code>config.php</code> -ben.</li>
            <li>Indítsd el a szervert a <code>php -S localhost:8000</code> paranccsal. Ha a 8000-es port foglalt, akkor használj másikat.</li>
            <li>Nyisd meg a böngésződben a <code>http://localhost:8000</code> - vagy a használt portnak megfelelő - címet.</li>
        </ul>

        <h3>Belépési adatok</h3>
        <ul>
            <li>Felhasználónév: user1@example.com</li>
            <li>Jelszó: password</li>
        </ul>

        <h3>Ellenőrzés</h3>
        <ol>
            <li>Védett oldal
                <ol>
                    <li>A látogató belépés nélkül megnyitja a <code>http://localhost:8000/protected.php</code> webcímet, az auth middleware átirányítja a <code>http://localhost:8000/login.php</code> oldalra.</li>
                    <li>A user belépés után megnyitja a <code>http://localhost:8000/protected.php</code> webcímet, az oldal megnyílik.</li>
                </ol>
            </li>
            <li>Vendég oldal
                <ol>
                    <li>A user belépés után megnyitja a <code>http://localhost:8000/login.php</code> webcímet, a guest middleware átirányítja a <code>http://localhost:8000/protected.php</code> oldalra.</li>
                    <li>A látogató belépés előtt megnyitja a <code>http://localhost:8000/login.php</code> webcímet, az oldal megnyílik.</li>
                </ol>
            </li>
            <li>Publikus oldal
                <ol>
                    <li>A látogató belépés nélkül megnyitja a <code>http://localhost:8000/public.php</code> webcímet, az oldal megnyílik.</li>
                    <li>A user belépés után megnyitja a <code>http://localhost:8000/public.php</code> webcímet, az oldal megnyílik.</li>
                </ol>
            </li>
        </ol>
    </section>
</body>
</html>