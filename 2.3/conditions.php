<?php 
    // $result = 1 < 3;
    // echo $result;.
    
$first_name =  'Abdullah';
$last_name = 'Al Shahed';
if($first_name == 'abdullah' && $last_name == 'Al Shahed'){
    echo 'The first condition is true!';
}else if($first_name != 'Abdullah' || $last_name == 'Al Shahed'){
    echo 'The second condition is true';
}else{
    echo 'The condition is fase!';
}
