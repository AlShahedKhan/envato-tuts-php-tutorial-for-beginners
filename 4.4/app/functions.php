<?php

function redirect($url){
    echo "Redirecting to: $url";
    header("Location: $url");
    die();
}


function view($name,$model = ''){
    global $view_bag;
    require("views/layout.view.php");
}