<?php

require('app/app.php');

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];

if(isset($_GET['search'])){
    $item = search_terms($_GET['search']);

    $view_bag['heading'] = 'Search Results for' . $_GETp['search'];
}else{
    $item = get_terms();
}

view('index', $item);
