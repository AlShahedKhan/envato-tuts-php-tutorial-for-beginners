<?php

session_start();
require('../app/app.php');

ensure_user_is_authenticated();

if (is_get()) {
    // Check if the "key" index exists in $_GET
    if (isset($_GET['key'])) {
        $key = sanitize($_GET['key']);

        if (empty($key)) {
            view('not_found');
            die();
        }

        $term = Data::get_term($key);

        if ($term === false) {
            view('not_found');
            die();
        }

        // Pass the retrieved term to the view
        view('admin/delete', ['model' => (object)$term]);
    } else {
        // Handle the case where "key" is not set in $_GET
        view('not_found');
        die();
    }
}

if (is_post()) {
    $term = sanitize($_POST['term']);

    if (empty($term)) {
        // TODO: display message
    } else {
        // Update the existing term instead of adding a new one
        // update_term($key, $term, $defination);
        // delete_term($original_term, $term, $defination);
        Data::delete_term($term);

        redirect('index.php');
    }
}
