<?php 

defined('IN_PRODUCTION') or die('No direct access allowed!');

return [
        'auth' => function(){
            if( !isset($_SESSION["user"] ) ) {
                header("location: /login.php");
                return;
            }
        },

        'guest'=>function(){
            if( isset($_SESSION["user"] ) ) {
                header("location: /protected.php");
                return;
            }
        }
    ];

