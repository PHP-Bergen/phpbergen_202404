# Why

> https://designpatternsphp.readthedocs.io/en/latest/Structural/DependencyInjection/README.html#purpose:
>>To implement a loosely coupled architecture in order to get better testable, maintainable and extendable code.


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

### Injectors (aka container, factory, provider etc)
An injector introduce or provide services to a client.
The injector instantiate and connect objects where objects may be both clients and services.
To avoid circular dependencies, the injector can NOT be a client.

## Types

### Constructor injection
Dependencies are provided to a class' constructor when, and only when, the class is instantiated.
By using constructor injection, we can guarantee all dependencies a class needs to work properly are present.

### Setter/method injection
Dependencies are provided to a class after it has been instantiated using setter methods.
The class can be instantiated with default values and allows for optional dependencies.
Adding new dependencies is easily done by adding new setter methods and will not break existing code.

# Pros

### Flexibility
Injecting dependencies allow you to easily swap service implementations without having to modify your client code.

### Code reusability
Components with injected dependencies are more reusable due to not being tightly coupled to specific implementations.
They are easier to add to different projects

### Maintainability
Loose coupling between classes and their dependencies make the code easier to maintain.

### Testability
Classes with injected dependencies can be easier to test as their dependencies and configuration can easily be replaced by stubs or mock objects.
This enables more effective unit testing.

# Cons

### Increased complexity
In (larger) projects with many dependencies, dependency injection add complexity to the codebase.

### Overhead
Dependency injection may introduce an overhead, both performance and configuration wise.
DI requires extra configuration and logic to wire dependencies and also need to do dependency resolution at runtime.

### Troubleshooting runtime errors
Errors in dependency configuration may cause unexpected errors that are challenging to troubleshoot.
Especially in large and complex projects.
