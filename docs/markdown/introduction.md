# Introduction to dependency injection (DI)

* loose coupling enabled by DI.
* Maintainable code
* Easier to test

## Hairdryers and tightly coupled code

* Order electrician
* Disconnect power to room
* Replace broken hairdryer
* Power room back on again
* Go back and double check that hairdryer actually work.

## Hairdryers and loosely coupled code

* Socket === interface
* Plug === interface implementation
* Enable to plug something else into the socket, no constrains as long as interface is followed. 
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
  * 