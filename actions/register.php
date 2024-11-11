<?php
include "../classes/User.php";

#create an obj
$user = new User;

#call rhe method 
$user->store($_POST);
?>