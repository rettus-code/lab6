<?php

$con = mysqli_connect('localhost','root','','bellinghamhotel');

// mysqli_select_db($con, 'bellinghamhotel');

if(!$con){
    die("Connection Error: ".mysqli_connect_error($con));
}
?>