<?php

require('app/app.php');

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];


if(isset($_GET['search'])){
    $item = Data::search_terms($_GET['search']);

    $view_bag['heading'] = 'Search Results for' . $_GET['search'];
}else{
    $item = Data::get_terms();
}

view('index', $item);
