<?php
require_once 'db.php';

function display_data(){
    global $connect;
    $query = "select * from camutan_resedent";
    $result = mysqli_query($connect,$query);
    return $result;
}