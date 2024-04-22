# Introduction to dependency injection (DI)

* loose coupling enabled by DI.
* Maintainable code

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
* interface properties like power and hertz.
