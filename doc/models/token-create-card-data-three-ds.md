
# Token Create Card Data Three Ds

Token Create Card Data Three Ds schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateCardDataThreeDs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enabled value. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `redirectEndpoint` | `?string` | Optional | Redirect endpoint URL. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateCardDataThreeDsBuilder;
use UnivaPay\ApiHelper;

$tokenCreateCardDataThreeDs = TokenCreateCardDataThreeDsBuilder::init()
    ->enabled(false)
    ->redirectEndpoint('redirect_endpoint0')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

