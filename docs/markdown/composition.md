# The composition pattern

With the composition design pattern, "simple" objects are composed into larger more complex structures.
It is based on building complex objects by combining simpler ones instead of relying on inheritance.

In compostion, objects often form a hierarchical structure where a composite object contains one or more component objects (components).

The composite object delegate tasks to it's component(s).
A composite object may also be a component object itself.

Each object in a composition is responsible for maintaining it's own state and behavior and changes to one component will usually not affect any other components.
This enhance maintainabiltiy and encapsulation.
By composing objects from smaller reusable components we encourage code reusability.
Simple objects can be combined and configured in different ways to build new functionality or different behaviors.
Components may be used in different contexts without the need for modification.

The component(s) of a composite object may be added, removed or replaced dynamically, promoting flexibility and extendability. 
