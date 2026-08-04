
# Card Processor Installment Config

Card-processor capabilities available for installment payments.

*This model accepts additional fields of type array.*

## Structure

`CardProcessorInstallmentConfig`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `revolving` | `?bool` | Optional | Allows revolving payments through supported processors. | getRevolving(): ?bool | setRevolving(?bool revolving): void |
| `fixedCycle` | `?bool` | Optional | Allows fixed-cycle installment payments through supported processors. | getFixedCycle(): ?bool | setFixedCycle(?bool fixedCycle): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CardProcessorInstallmentConfigBuilder;
use UnivaPay\ApiHelper;

$cardProcessorInstallmentConfig = CardProcessorInstallmentConfigBuilder::init()
    ->revolving(true)
    ->fixedCycle(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

