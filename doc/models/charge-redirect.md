
# Charge Redirect

Charge Redirect schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeRedirect`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | `?string` | Optional | Endpoint value. | getEndpoint(): ?string | setEndpoint(?string endpoint): void |
| `redirectId` | `?string` | Optional | Redirect identifier. | getRedirectId(): ?string | setRedirectId(?string redirectId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeRedirectBuilder;
use UnivaPay\ApiHelper;

$chargeRedirect = ChargeRedirectBuilder::init()
    ->endpoint('endpoint8')
    ->redirectId('00001874-0000-0000-0000-000000000000')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

