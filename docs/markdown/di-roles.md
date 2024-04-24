# Dependency injection

## Roles
The dependency injection technique consist of four main components:

### Services
A service is a class that provide some kind of useful functionality.

### Clients
A client is a class that uses a service.
Any services that a class requires to work, are the class' dependencies.

### Interfaces
An interface establishes a contract that a class implementing it must adhere to.
Any class implementing an interface, can be expected to behave the same way.
Clients should not be concerned with how their dependencies are implemented, but should know their name and the API.
By ignoring implementation details of their dependencies, clients don't have to change when a dependency do.
You can even swap out an entire dependency with another one implementing the same interface.

* [Depoendency injection types](di-types.md)
