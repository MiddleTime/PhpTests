<?php

//популярные инструменты

$clients = [
    [
        "name"=> "Vasya",
        "lastname"=> "Dolgov",
        "age"=> 19,
        "email"=> "vasya@mail.ru"
    ],
    [
        "name"=> "Kolya",
        "lastname"=> "Grisin",
        "age"=> 50,
        "email"=> "kolya@mail.ru"
    ],
    [
        "name"=> "Valya",
        "lastname"=> "Galkina",
        "age"=> 22,
        "email"=> "valya@mail.ru"
    ]
];

//получить список email
$emails = [];
foreach ($clients as $client) {
    $emails[]= $client['email'];    
}
//var_dump($emails);

//Задание вывести список имен

$names = [];
foreach ($clients as $client) {
    $names[]= $client['name'];    
}
echo '<pre>';
var_dump($emails, $names);
echo '</pre>';

//Задание вывести список имен и фамилий

//создать массив товаров с ценами и вывести на экран этот массив (товар + цена)


