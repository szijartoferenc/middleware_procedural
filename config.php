<?php 

defined('IN_PRODUCTION') or die('No direct access allowed!');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'middlewares');

return [
    'connection' => call_user_func(function(){
        $conn=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
        if( $err = mysqli_connect_errno() ){
            exit("MySQL Error: $err");
        }
        return $conn;
    }),
    // további konfig beállítások
];