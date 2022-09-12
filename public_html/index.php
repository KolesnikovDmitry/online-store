<?php

class Grandpa {
    public $hair = 'Русые';

    public $body = "Нормальное";

    private $nose = 'Кривой';

    public function eat($calories) {
        if ($calories > 500){
            $this->body = "Толстый";
        } else {
            $this->body = "Худой";
        }
    }
    protected function showGrandpaNose() {
        return $this->nose;
    }
}

class Father extends Grandpa {
    public function showGrandpaNose() {
        $nose = parent::showGrandpaNose();
        echo $nose;
    }
}


$masha = new Father();

$ivan = new Father();

$masha->showGrandpaNose();


echo "Тело Маши - " .$masha->body . '<br/>';
echo "Тело Ивана - " .$ivan->body . '<br/>';

//$masha->eat(200);
//$ivan->eat(2000);
//
//echo "Тело Маши - " .$masha->body . '<br/>';
//echo "Тело Ивана - " .$ivan->body . '<br/>';
//echo "Тело Пети - " .$petya->body . '<br/>';