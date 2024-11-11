<?php
include "../classes/User.php";

#create an obj
$user = new User;

#call rhe method 
$user->update($_POST,$_FILES);
?>