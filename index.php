<?php

abstract class Creator
{
    abstract public function make();
}

class Factory1 extends Creator
{

    public function make(): ConcreteInterface
    {
        return new Concrete1();
    }
}

class Factory2 extends Creator
{

    public function make(): ConcreteInterface
    {
        return new Concrete2();
    }
}

interface ConcreteInterface
{
    public function something();
}

class Concrete1 implements ConcreteInterface
{

    public function something(): string
    {
        return 'Concrete 1';
    }
}

class Concrete2 implements ConcreteInterface
{

    public function something(): string
    {
        return 'Concrete 2';
    }
}


$factory = new Factory1();
$instance = $factory->make();
var_dump($instance->something());
