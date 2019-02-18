<?php
//controller


require './Upload.php';

//model
uploadImage($_FILES['image']);

//view
include 'view.php';
?>