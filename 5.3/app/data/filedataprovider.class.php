<?php

require('glossaryterm.class.php');


class FileDataProvider{
    function __construct($file_path){
        $this->file_path = $file_path;
    }

    public function get_terms(){
        $json = $this->get_data();
    
        return json_decode($json);
    }
    
    public function get_term($term){
        $terms = $this->get_terms();
    
        foreach($terms as $item){
            if($item->terms == $term){
                return $item;
            }
        }
    
        return false;
    }
    
    public function add_terms($term, $definition){
        $items = $this->get_terms();
    
        $items[] = new GlossaryTerm($term, $definition);
        // $obj = (object)[
        //     'terms' => $term,
        //     'defination' => $definition
        // ];
        // $items[] = $obj;
        $this->set_data($items);
    }
    
    public function update_term($original_term, $new_term, $defintion){
        $terms = $this->get_terms();
    
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
        $this->set_data($terms);
    }
    
    public function delete_term($term){
        $terms = $this->get_terms();
    
        for ($i=0; $i < count($terms); $i++){
            if($terms[$i]->terms === $term){
                unset($terms[$i]);
                break;
            }
        }
    
        $new_terms = array_values($terms);
        $this->set_data($new_terms);
    }
    
    public function search_terms($search){
        $items = $this->get_terms();
    
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
    
    private function get_data(){    
        $json = '';
    
        if(!file_exists($this->file_path)){
            file_put_contents($this->file_path, '');
        } else {
            $json = file_get_contents($this->file_path);
        }
    
        return $json;
    }
    
    private function set_data($arr){
        $json = json_encode($arr);
    
        if (file_put_contents($this->file_path, $json) === false) {
            echo "Error writing data to the file";
        }
    }
}
