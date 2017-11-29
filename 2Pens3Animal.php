<?php

error_reporting(E_ALL);

abstract class pen {
    public $animals;
    public function rigidity($fencing) {
        echo 'this pen is ' . $fencing;
    }
}

abstract class animal {
    public function run($fast) {
        echo 'RUUUUNNNNN!!!!, ' . $fast;
    }
}

class penOne extends pen {
    public function __construct(animal $animal) {
        $this->animals = $animal;
    }



}

class penTwo extends pen {
    public function __construct(array $animals) {
        $this->animals = $animals;
    }

//    public function makeEat {
//
//    }
}


class lion extends animal {

}

class zebra extends animal {

}

class antelope extends animal {

}

$lion = new lion();
$pen = new penOne($lion);
var_dump($pen);
$zebra = new zebra();
$antelope = new antelope();
$pen2 = new penTwo([$zebra, $antelope]);
var_dump($pen2);

