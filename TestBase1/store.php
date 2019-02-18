<?php

//controller

require './Post.php';  //здесь модель. Ниже мы вызываем методы нашей модели

$filename = uploadImage($_FILES['image']);
addPost($_POST['title'], $_POST['content'], $filename);

header("Location:./");
