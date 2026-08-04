
# Charge Create Request Redirect

Charge Create Request Redirect schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeCreateRequestRedirect`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | `?string` | Optional | URL to redirect the customer to after payment completion. | getEndpoint(): ?string | setEndpoint(?string endpoint): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCreateRequestRedirectBuilder;
use UnivaPay\ApiHelper;

$chargeCreateRequestRedirect = ChargeCreateRequestRedirectBuilder::init()
    ->endpoint('endpoint8')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

