<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php

class Dog {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        return 'Гав! Гав!';
    }

}
