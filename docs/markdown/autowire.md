# Defining Services Dependencies Automatically (Autowiring)

>Autowiring allows you to manage services in the container with minimal configuration. It reads the type-hints on your constructor (or other methods) and automatically passes the correct services to each method.

## Example config

```yaml
services:
    _defaults:
        autowire: true
        autoconfigure: true

    Phpbergen\Di\Example1_2\Writer:
      autowire: true
      
```
