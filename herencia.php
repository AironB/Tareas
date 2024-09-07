<?php
class Human{
    public $name;
    public $birthday;
}
class Animal {
    public $name;
    public $sex;
    public $age;

    public function breathe(){}
    public function eat($food){}
    public function run($destination){}

}
interface Hunt{
    public function capture();
}
class Cat extends Animal implements Hunt{
    //atributos propios de Cat
    public $isNasty;//boolean

    public function meow(){}
    public function capture(){
        //como caza un gato
    }

}
class Dog extends Animal implements Hunt{
    private Human $bestFriend;//object

    public function bark(){}

    public function capture(){}
}
?>