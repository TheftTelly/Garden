<?php
abstract class Animal
{
    protected  $name;

    public abstract function makeSound();

    public function jump()
    {

    }

}
class Cat extends Animal
{
    public function makeSound()
    {
        echo 'Мяу';
    }
}
class Dog extends Animal
{
    public function makeSound()
    {
       echo 'Гав гав гав гав гав';
    }
}

$cat = new Cat();
$dog = new Dog();

