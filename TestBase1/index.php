<?php   //контроллер - то где происходит "спектакль"

require './Post.php';  //здесь храниться наша модель (бизнес-логика)

$posts = getPosts();   //использование метода модели 

//наш view
include './view.php';
