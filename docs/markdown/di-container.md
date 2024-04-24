# DI container

[PSR-11: Container interface](https://www.php-fig.org/psr/psr-11/)

>The goal set by ContainerInterface is to standardize how frameworks and libraries make use of a container to obtain objects and parameters

```php
interface ContainerInterface
{
    public function get(string $id);
    public function has(string $id);
}
```

## Example from Drupal 10.x

Read from config files.

```yaml
services:
  address.address_format_repository:
    class: Drupal\address\Repository\AddressFormatRepository
    arguments: ['@event_dispatcher']

  address.country_repository:
    class: Drupal\address\Repository\CountryRepository
    arguments: ['@cache.data', '@language_manager']

  address.postal_label_formatter:
    class: CommerceGuys\Addressing\Formatter\PostalLabelFormatter
    arguments: [
      '@address.address_format_repository', 
      '@address.country_repository', 
      '@address.subdivision_repository'
    ]
```

Next: [Autowiring](autowire.md)
