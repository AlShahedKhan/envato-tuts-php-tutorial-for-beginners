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
        view('admin/edit', ['model' => (object)$term]);
    } else {
        // Handle the case where "key" is not set in $_GET
        view('not_found');
        die();
    }
}

if (is_post()) {
    $term = sanitize($_POST['term']);
    $defination = sanitize($_POST['defination']);
    $original_term = sanitize($_POST['original-term']);

    if (empty($term) || empty($defination) || empty($original_term)) {
        // TODO: display message
    } else {
        // Update the existing term instead of adding a new one
        // update_term($key, $term, $defination);
        Data::update_term($original_term, $term, $defination);
        redirect('index.php');
    }
}
