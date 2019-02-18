<?php

//controller   - место откуда вызывается наша модель, которая задем передаем в view

function uploadImage($image){
    $name = $image['name'];
    $tmp_name = $image['tmp_name'];

    move_uploaded_file($tmp_name, "./uploads/".$name);

}


//model  - место, где у меня код, который отвечают за бизнес-логигу моего проекта
uploadImage($_FILES['image']);

//echo '<pre>';
//var_dump($_FILES);
//
//echo '</pre>';
?>

<img src="./uploads/image.jpg" alt="">

