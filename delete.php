<?php
require_once 'user.php';
$user = new User();

$id  = $_GET['id'];
$user->delete_user($id);


?>