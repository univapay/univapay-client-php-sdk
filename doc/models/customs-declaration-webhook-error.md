
# Customs Declaration Webhook Error

Error payload returned when customs declaration processing fails.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?int` | Optional | Backend customs declaration error code. | getCode(): ?int | setCode(?int code): void |
| `message` | `?string` | Optional | Human-readable backend error name. | getMessage(): ?string | setMessage(?string message): void |
| `details` | `?string` | Optional | Optional backend-provided detail string. | getDetails(): ?string | setDetails(?string details): void |
| `others` | [`?(CustomsDeclarationWebhookOtherError[])`](../../doc/models/customs-declaration-webhook-other-error.md) | Optional | Additional nested error records returned by the backend. | getOthers(): ?array | setOthers(?array others): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookErrorBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookOtherErrorBuilder;
use UnivaPay\ApiHelper;

$customsDeclarationWebhookError = CustomsDeclarationWebhookErrorBuilder::init()
    ->code(601)
    ->message('There was a processing error')
    ->details('Missing customs registration')
    ->others(
        [
            CustomsDeclarationWebhookOtherErrorBuilder::init()
                ->type('related_item')
                ->credentialsId('000013b6-0000-0000-0000-000000000000')
                ->message(
                    [
                        'message4',
                        'message5',
                        'message6'
                    ]
                )
                ->itemName('charge')
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

