
<?php

require('../app/app.php');
if(is_post()){
    $term = sanitize($_POST['term']);
    $defination = sanitize($_POST['defination']);

    if(empty($term) || empty($defination)){
        //TODO: display message
    }else{
        add_term($term,$defination);
        redirect('index.php');
    }
}

view('admin/create');