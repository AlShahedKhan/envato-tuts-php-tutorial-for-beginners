<?php

require('app/app.php');

$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];

$data = new FileDataProvider(CONFIG['data_file']);

if(isset($_GET['search'])){
    $item = $data->search_terms($_GET['search']);

    $view_bag['heading'] = 'Search Results for' . $_GETp['search'];
}else{
    $item = $data->get_terms();
}

view('index', $item);
