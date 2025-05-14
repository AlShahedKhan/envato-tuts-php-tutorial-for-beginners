<?php
    $title = 'Includes';
    
    include('./../inc/header.php');
    require_once('./../inc/functions.php'); // If we call require then if function file 
                                            //have in multipul files than it will call all here.

    $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); //false
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

    // if($category == false || $limit == false){
    //     die();
    // }
    if($category == false){
        $category = 1;
    }
    if($limit == false){
        $limit = 10;
    }
    // $cetegory = '';
    // $limit = '';

    // function setValues(){
    //     global $cetegory,$limit;
    //     $cetegory = $_GET['cetegory'];
    //     $limit = $_GET['limit'];
    // }
    // setValues();
   
?>

<!-- Main Content -->
<div id="content">
     <!-- Main Content -->
    <div id="content">
        <table class="table table-striped">
            
            <p>Showing cetegory:- <?=$category;?> Limit <?=$limit?></p>
            
            
        </table>

    </div>
</div>
<?php include('./../inc/footer.php') ?>