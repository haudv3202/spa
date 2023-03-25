<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "spa";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

//const DBNAME = "test";
//const DBUSER = "bzelkqknhosting_spa";
//const DBPASS = "fqD1jGCKWmmH";
//const DBCHARSET = "utf8";
//const DBHOST = "localhost";

//const BASE_URL = "http://efddtqxw.nethost-5011.000web.xyz/";


//
const BASE_URL = "http://localhost/spa/";

function route($nameRoute){
    return BASE_URL.$nameRoute;
}
function redirect($key,$msg,$route) {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors'   :
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route."?msg=".$key);die;
}
if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function($x) {print_r($x);}, func_get_args());
        die;
    }
}

