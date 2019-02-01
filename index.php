<html>  Привет!!! СТраница<br/> 

    <br/> ==================================================<br/>
</html>

<?php
//вариант 1 

echo 'Sergei';




echo 'Sergei';






echo 'Sergei';






//недостатки
//Переименовать, добавить перенос строки везде...
//можно ли в одном месте задать и везде где нужно вызывать
// вариант 2 

echo '<br/>2 ==================================================<br/>';

$name = 'Sergei' . '<br/>';



echo $name;


echo $name;



echo $name;


//есть ли разница визуально в том как будет работать? 
// и для машины...

echo '<br/>3 ==================================================<br/>';

// вариант 3
// нужно добавить фамилию

$lastName = 'Petrov' . '<br/>';


echo $name;
echo $lastName;


echo $name;
echo $lastName;



echo $name;
echo $lastName;

//недостатки , если ли связь имени с фамилией?


echo '<br/> 4 ==================================================<br/>';

// вариант 4

$person = [
    "name" => 'Sergei',
    "lastName" => 'Petrov'
];

echo $person['name'];
echo '<br/>';
echo $person['lastName'];


/*
 * есть ли визуальная разница? Зачем заморачиваться с массивом
  мы соединили человека (имитировали реальную жизнь
 * то есть как в жизни

 */


echo '<br/> 5 ==================================================<br/>';

// хотим чтобы человек приметствовал людей на своем сайте

echo 'Привет';
echo 'How are doing??';
echo 'Bye';

//проблема если несколько раз выводить... что делать? И действия разнозненные

function sayHello() {
    echo 'Привет';
    echo 'How are doing??';
    echo 'Bye';
}

/* для компьюетера сильно не поменялось, а для разработчика - да. 
  //для чего делать функции тогда? Код - для человека.

 *  есть смысл и ест техническая реализация. 
 *  Для компьюетра все равно все будет в нули и единицы, он по другому не имеет
 * код для нас. Мы обучаем нашего "робота" и пользуемся различными гайками-шурупами и тд.
  код "отзеркаливает те мысли которые есть у нас в голове
 * 
 * недостатки - функция ни как не связана с человеком, то ЕГО  поведением
 * Нужно связать массив и функцию, чтобы именно этот человека здороваолся...
 */
echo '<br/> 6 ==================================================<br/>';

// теперь для этого нужен класс
// мы исходим от жизни. ЧТобы не быть ходящими энциклопедиями
// все исходит из жизни. 
class PersoNoLD {

    var $name = 'Sergei';
    var $lastName = 'Petrov';

    function sayHello() {
        echo 'Привет';
        echo 'How are doing??';
        echo 'Bye';
    }

}

$misha = new Person;
echo $misha->name;
echo $misha->lastName;

echo $misha->sayHello();
echo '<br/>  ==================================================<br/>';

echo '<br/>  ==================================================<br/>';

class Person {

    var $name;
    var $lastName;

    function sayHello() {
        echo ' Привет ';
        echo ' How are doing?? ';
        echo ' Bye ';
    }

}

$misha = new Person;
$misha->name = 'Mihail';
$misha->lastName = 'Petrov';
//echo 'Меня зовут '.$misha->name;
$misha->sayHello();

$petya = new Person;
$petya->name = 'Petya';
$petya->lastName = 'Legkov';
$petya->sayHello();

echo '<br/>  ==================================================<br/>';

class PersonNew {

    var $name;
    var $lastName;

    function __construct($name, $lastName) {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    function sayHello() {
        echo ' Привет! ';
        echo 'My name is '.$this->name;
        echo '. How are doing?? ';
        echo ' Bye ';
    }

}

$misha = new PersonNew('Misha', 'petrov');
//echo 'Меня зовут '.$misha->name;
$misha->sayHello();

$petya = new PersonNew('Petya', 'Legkov');
$petya->sayHello();



phpinfo();
//результат будет тот же самый но все структурировано
//а синтаксис тупо для того чтобы это все написать понятно.
//создайте еще одного человека и запустите приветствия от него. 
?>