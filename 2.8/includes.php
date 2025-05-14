<?php
    $title = 'Includes';
    
    include('./../inc/header.php');
    require_once('./../inc/functions.php'); // If we call require then if function file 
                                            //have in multipul files than it will call all here.

    $gitures = [
        ['name' => 'Vela', 'manufecterur' => 'PRS'],
        ['name' => 'Explorer', 'manufecterur' => 'Givsol'],
        ['name' => 'Strat', 'manufecterur' => 'Finder']
    ];

    $giter_name = pluck($gitures, 'manufecterur');
   
?>

<!-- Main Content -->
<div id="content">
     <!-- Main Content -->
    <div id="content">
        <table class="table table-striped">
            
            <?=/* $result;*/
            output($giter_name);
            ?>
            
            
        </table>

    </div>
</div>
<?php include('./../inc/footer.php') ?>