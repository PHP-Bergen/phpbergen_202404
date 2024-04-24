# Dependency injection

## Pros

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

## Cons

### Increased complexity
In (larger) projects with many dependencies, dependency injection add complexity to the codebase.

### Overhead
Dependency injection may introduce an overhead, both performance and configuration wise.
DI requires extra configuration and logic to wire dependencies and also need to do dependency resolution at runtime.

### Troubleshooting runtime errors
Errors in dependency configuration may cause unexpected errors that are challenging to troubleshoot.
Especially in large and complex projects.
