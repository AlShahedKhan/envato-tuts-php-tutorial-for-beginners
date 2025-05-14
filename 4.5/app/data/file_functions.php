<?php

function get_terms(){
    $json = get_data();

    return json_decode($json);
}

function get_term($term){
    $terms = get_terms();

    foreach($terms as $item){
        if($item->terms == $term){
            return $item;
        }
    }

    return false;
}

function search_terms($search){
    $items = get_terms();

    // if (!$items) {
    //     return [];
    // }

    $results = array_filter($items, function($item) use ($search) {
        if (strpos($item->terms, $search) !== false || 
        strpos($item->defination, $search) !== false) {
            return true;
        }
        return false;
    });

    return $results;
}


function get_data(){
    $fname = CONFIG['data_file'];

    $json = '';

    if(!file_exists($fname)){
        file_put_contents($fname, '');
    }else{
        $json = file_get_contents($fname);
    }

    return $json;
}