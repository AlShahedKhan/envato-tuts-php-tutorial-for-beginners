<?php

function redirect($url){
    echo "Redirecting to: $url";
    header("Location: $url");
    die();
}


function view($name,$model = ''){
    global $view_bag;
    require(APP_PATH . "views/layout.view.php");
}