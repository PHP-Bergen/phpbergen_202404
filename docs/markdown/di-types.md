# Dependency injection

## Types

### Constructor injection
Dependencies are provided to a class' constructor when, and only when, the class is instantiated.
By using constructor injection, we can guarantee all dependencies a class needs to work properly are present.

### Setter/method injection
Dependencies are provided to a class after it has been instantiated using setter methods.
The class can be instantiated with default values and allows for optional dependencies.
Adding new dependencies is easily done by adding new setter methods and will not break existing code.

* [Dependency injection pros/cons](di-pros-cons.md)
