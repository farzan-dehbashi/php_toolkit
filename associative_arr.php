<?php 
    function print_all_elements($arr){
        foreach ($arr as $element){
            echo $element . "<br>";
        }
    }
    $ass_arr = array("Farzan" => 10, "Mahmoud" => 12);
    print_all_elements($ass_arr);

?>