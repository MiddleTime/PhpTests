<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
require 'Dog.php';
//$dog = new Dog('Николай');
//echo 'Собаку зовут: ' . $dog->name . '<br>';
//echo 'Собака говорит: ' . $dog->speak() . '<br>';

$Nikolia = new Dog('Николай');
echo 'Собаку зовут: ' . $Nikolia->name;
echo ' Собака говорит: ' . $Nikolia->speak() . '<br>';

$wifi = new Dog('wifi');
echo 'Собаку зовут: ' . $wifi->name;
echo ' Собака говорит: ' . $wifi->speak() . '<br>';


//пример разницы класс и объект. Класс один и тот же а объекты разные. 