<?php

abstract class VehicleFactory
{
    abstract public function getVehicle(): IFactory;
}

class ScooterFactory extends VehicleFactory
{
    public function getVehicle(): IFactory
    {
        return new Scooter();
    }
}

class BikeFactory extends VehicleFactory
{
    public function getVehicle(): IFactory
    {
        return new Bike();
    }
}


interface IFactory
{
    public function drive(): string;
}

class Scooter implements Ifactory
{
    public function drive(): string
    {
        return 'Dirigindo minha Scooter';
    }
}

class Bike implements Ifactory
{

    public function drive(): string
    {
        return 'Dirigindo minha Bike';
    }
}

$factory = new ScooterFactory;
$instance = $factory->getVehicle();

var_dump($instance->drive());
