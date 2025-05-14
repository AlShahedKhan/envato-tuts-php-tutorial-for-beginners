<?php

class MySqlDataProvider extends DataProvider{
    public function get_terms(){
        $db = $this->connect();
        if($db == null){
            return [];
        }
        $query = $db->query('SELECT * FROM terms');
        
        $data = $query->fetchALL(PDO::FETCH_CLASS,'GlossaryTerm');

        $query = null;
        $db = null;
        return $data;        
    }
    
    public function get_term($term){
    }
    
    public function add_terms($term, $definition){
        $db = $this->connect();
        if($db == null){
            return;
        }

        $sql = 'INSERT INTO terms(term, definition) VALUES (:term, :definition)';
        $smt = $db->prepare($sql);
        $smt->execute([
            ':term' => $term,
            ':definition' => $definition
        ]);
        $smt = null;
        $db = null;
    }
    
    public function update_term($original_term, $new_term, $defintion){
    }
    
    public function delete_term($term){
    }
    
    public function search_terms($search){
    }

    private function connect(){
         try {
            return new PDO($this->source,CONFIG['db_user'],CONFIG['db_password']);
         } catch (PDOException $e) {
            //throw $th;
            return null;
         }
    }
}

