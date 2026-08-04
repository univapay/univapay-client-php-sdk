
# Generic Metadata

A free-form dictionary for custom metadata.

*This model accepts additional fields of type [string|float|bool](../../doc/models/containers/generic-metadata-value.md).*

## Structure

`GenericMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderId` | `?string` | Optional | Example of a custom metadata key. | getOrderId(): ?string | setOrderId(?string orderId): void |
| `univapayName` | `?string` | Optional | Consumer name passed to payment processors that require it (e.g., konbini, bank transfer). | getUnivapayName(): ?string | setUnivapayName(?string univapayName): void |
| `univapayPhoneNumber` | `?string` | Optional | Consumer phone number passed to payment processors that require it. | getUnivapayPhoneNumber(): ?string | setUnivapayPhoneNumber(?string univapayPhoneNumber): void |
| `additionalProperties` | array<string, string\|float\|bool> | Optional | Allowed values for metadata properties. | findAdditionalProperty(string key): string\|float\|bool | additionalProperty(string key, string\|float\|bool value): void |

## Example

```php
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$genericMetadata = GenericMetadataBuilder::init()
    ->orderId('12345')
    ->univapayName('univapay-name4')
    ->univapayPhoneNumber('univapay-phone-number8')
    ->additionalProperty('exampleAdditionalProperty', 'String4')
    ->build();
```

