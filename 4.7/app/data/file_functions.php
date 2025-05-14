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

function add_term($term,$definition){
    $items = get_terms();

    $obj = (object)[
        'terms' => $term,
        'defination' => $definition
    ];
    $items[] = $obj;
    set_data($items);
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

// function set_data($arr){
//     $fname = CONFIG['data_file'];
//     $json = json_encode($arr);

//     file_get_contents($fname,$json);
// }
function set_data($arr){
    $fname = CONFIG['data_file'];
    $json = json_encode($arr);

    // Use file_put_contents instead of file_get_contents
    if (file_put_contents($fname, $json) === false) {
        // Handle the error, e.g., display an error message or log it
        echo "Error writing data to the file";
    }
}
