<?php

// 1. Base Vehicle class with final getDetails method
class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Final method to prevent overriding
    final public function getDetails() {
        return "Vehicle: $this->make<br>Model: $this->model<br>Year: $this->year";
    }

    // Placeholder for polymorphic method
    public function describe() {
        return "This is a vehicle.";
    }
}

// 2. Car class extending Vehicle
class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    // Overriding the describe method for Car
    public function describe() {
        return "This is a car with $this->doors doors.";
    }
}

// 3. Final Motorcycle class extending Vehicle
final class Motorcycle extends Vehicle {
    private $engineCapacity;

    public function __construct($make, $model, $year, $engineCapacity) {
        parent::__construct($make, $model, $year);
        $this->engineCapacity = $engineCapacity;
    }

    // Overriding the describe method for Motorcycle
    public function describe() {
        return "This is a motorcycle with an engine capacity of $this->engineCapacity cc.";
    }
}

// 4. Interface for Electric Vehicles
interface ElectricVehicle {
    public function chargeBattery();
}

// 5. ElectricCar class extending Car and implementing ElectricVehicle interface
class ElectricCar extends Car implements ElectricVehicle {
    private $batteryLevel;

    public function __construct($make, $model, $year, $doors, $batteryLevel = 100) {
        parent::__construct($make, $model, $year, $doors);
        $this->batteryLevel = $batteryLevel;
    }

    // Implementing the chargeBattery method
    public function chargeBattery() {
        $this->batteryLevel = 100;
        return "Battery fully charged.";
    }

    // Overriding the describe method for ElectricCar
    public function describe() {
        return "This is an electric car with $this->batteryLevel% battery.";
    }
}

// 6. Testing the implementation

// Creating instances of each vehicle type
$car = new Car("Toyota", "Corolla", 2020, 4);
$motorcycle = new Motorcycle("Harley-Davidson", "Street 750", 2019, 749);
$electricCar = new ElectricCar("Tesla", "Model 3", 2022, 4, 80);

// Output details and description
echo $car->getDetails() . "<br>";
echo $car->describe() . "<br>";
echo "--------------------------------<br>"; // This is for aesthetic purposes. (para organized haha)

echo $motorcycle->getDetails() . "<br>";
echo $motorcycle->describe() . "<br>";
echo "--------------------------------<br>";

echo $electricCar->getDetails() . "<br>";
echo $electricCar->describe() . "<br>";
echo $electricCar->chargeBattery() . "<br>";

?>
