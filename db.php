<?php
$connect= mysqli_connect('localhost','root','','myinfo');
   
if(mysqli_connect_errno()){
    echo 'Faild to connect database:'.mysql_connect_error();
}
?>