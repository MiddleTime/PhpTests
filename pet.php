<?php header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php

class Pet {

    public $name;

    public function __construct($myName) {
        $this->name = $myName;
    }

    public function speak() {
        return 'ничего';
    }

}
