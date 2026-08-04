
# Charge Capture Request

Request payload for capturing an authorized charge.

*This model accepts additional fields of type array.*

## Structure

`ChargeCaptureRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | The amount to capture. Must be less than or equal to the authorized amount. | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | ISO-4217 currency code. Must exactly match the currency used during authorization. | getCurrency(): string | setCurrency(string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCaptureRequestBuilder;
use UnivaPay\ApiHelper;

$chargeCaptureRequest = ChargeCaptureRequestBuilder::init(
    1000,
    'JPY'
)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

