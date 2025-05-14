<?php
require('glossaryterm.class.php');

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

function add_term($term, $definition){
    $items = get_terms();

    $items[] = new GlossaryTerm($term, $definition);
    // $obj = (object)[
    //     'terms' => $term,
    //     'defination' => $definition
    // ];
    // $items[] = $obj;
    set_data($items);
}

function update_term($original_term, $new_term, $defintion){
    $terms = get_terms();

    // Find the term with the specified key
    foreach ($terms as $item) {
        if ($item->terms == $original_term) {
            // Update the term and definition
            $item->terms = $new_term;
            $item->defination = $defintion;
            break;
        }
    }

    // Save the updated terms
    set_data($terms);
}

function delete_term($term){
    $terms = get_terms();

    for ($i=0; $i < count($terms); $i++){
        if($terms[$i]->terms === $term){
            unset($terms[$i]);
            break;
        }
    }

    $new_terms = array_values($terms);
    set_data($new_terms);
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
    } else {
        $json = file_get_contents($fname);
    }

    return $json;
}

function set_data($arr){
    $fname = CONFIG['data_file'];
    $json = json_encode($arr);

    if (file_put_contents($fname, $json) === false) {
        echo "Error writing data to the file";
    }
}
