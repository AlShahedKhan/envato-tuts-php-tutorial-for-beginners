<?php

require('app/app.php');

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];


if(isset($_GET['search'])){
    $item = Data::search_term($_GET['search']);

    $view_bag['heading'] = 'Search Results for' . $_GETp['search'];
}else{
    $item = Data::get_terms();
}

view('index', $item);
