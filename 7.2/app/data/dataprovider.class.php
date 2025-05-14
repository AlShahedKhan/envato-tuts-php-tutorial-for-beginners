<?php

require('glossaryterm.class.php');


class DataProvider{
    function __construct(public $source){
    }

    public function get_terms(){
        
    }
    
    public function get_term($term){
    }
    
    public function add_terms($term, $definition){
    }
    
    public function update_term($original_term, $new_term, $defintion){
    }
    
    public function delete_term($term){
    }
    
    public function search_terms($search){
    }
}

