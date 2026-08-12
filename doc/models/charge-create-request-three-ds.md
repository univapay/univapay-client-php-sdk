
# Charge Create Request Three Ds

Charge Create Request Three Ds schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeCreateRequestThreeDs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redirectEndpoint` | `?string` | Optional | URL to redirect the customer to after 3DS authentication. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `mode` | [`?string(ChargeCreateRequestThreeDsMode)`](../../doc/models/charge-create-request-three-ds-mode.md) | Optional | 3D-Secure authentication type. App Token Secret is required to use 'skip'.<br><br>**Default**: `ChargeCreateRequestThreeDsMode::NORMAL` | getMode(): ?string | setMode(?string mode): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCreateRequestThreeDsBuilder;

$chargeCreateRequestThreeDs = ChargeCreateRequestThreeDsBuilder::init()->build();
```

