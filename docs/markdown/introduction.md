# Introduction to dependency injection (DI)

* loose coupling enabled by DI.
* Maintainable code
* Easier to test

## Two
* [Hairdryers and loosely coupled code](at_the_hotel.md)
* Socket === interface
* Plug === interface implementation
* Enable to plug something else into the socket, no constrains as long as interface is followed. 

## Three 
* interface define power and hertz, obeys the interface contract.
* No constrains to only hairdryer anymore 
* Liskov Substitution Principle (LSP)
  * Replace with other type of devices.
  * Replace with unknown type of devices to come.
* Unplug the device. Even with nothing plugged in the room does not explode.
  * Null Object
* UPS between socket and device.
  * Decorator design pattern - Intercepting implementation
  * Single Responsibility
  * Ability to incrementally add new functionality
* Composite design pattern
* Open/Closed principle. Extend application without changing exiting code.
  * Open for extensibility, closed for modification.
* Enable to plug something else into the socket, no constrains as long as interface is followed.

## Three
* interface define power and hertz, obeys the interface contract.
* No constrains to only hairdryer anymore
* Liskov Substitution Principle (LSP)
    * Replace with other type of devices.
    * Replace with unknown type of devices to come.
* Unplug the device. Even with nothing plugged in the room does not explode.
    * Null Object
* UPS between socket and device.
    * Decorator design pattern - Intercepting implementation
    * Single Responsibility
    * Ability to incrementally add new functionality
* Composite design pattern
* Open/Closed principle. Extend application without changing exiting code.
    * Open for extensibility, closed for modification.

* Adapter pattern
