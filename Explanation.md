# Week3-LabAct3
Laboratory Activity 3: Vehicle Management System: Understanding Inheritance and Polymorphism

To tackle the lab exercise, I approached the task with a focus on inheritance, polymorphism, and interfaces in PHP. 
Here's a breakdown of the concepts and how they were implemented in the solution:

#Inheritance:
The Vehicle class serves as the base class containing core vehicle information, such as make, model, and year. 
Both Car and Motorcycle inherit from Vehicle and add their specific features. 
This demonstrates how properties and methods are inherited by child classes.

#Polymorphism:
We override the describe method in the child classes (Car, Motorcycle, and ElectricCar) to display specific information based on the vehicle type. 
Polymorphism ensures that even though the method name is the same, the behavior varies based on the object type.

#Interface Implementation:
The ElectricVehicle interface defines the chargeBattery() method, ensuring that any electric vehicle will implement this functionality. 
ElectricCar, which extends Car, implements the ElectricVehicle interface and defines the behavior for chargeBattery().

#Final Keyword:
The Motorcycle class is marked as final to prevent further inheritance, while the getDetails() method in the Vehicle class is marked final to prevent overriding. 
This ensures certain safety-critical aspects of the code are not tampered with.

#Testing:
By creating instances of Car, Motorcycle, and ElectricCar, we can observe how these objects share common behaviors from the Vehicle class while exhibiting their unique behaviors via polymorphism and method overriding.
