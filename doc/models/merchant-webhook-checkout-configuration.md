
# Merchant Webhook Checkout Configuration

Checkout field collection settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookCheckoutConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ecEmail` | [`?MerchantWebhookCheckoutToggle`](../../doc/models/merchant-webhook-checkout-toggle.md) | Optional | Checkout feature toggle. | getEcEmail(): ?MerchantWebhookCheckoutToggle | setEcEmail(?MerchantWebhookCheckoutToggle ecEmail): void |
| `ecProducts` | [`?MerchantWebhookCheckoutToggle`](../../doc/models/merchant-webhook-checkout-toggle.md) | Optional | Checkout feature toggle. | getEcProducts(): ?MerchantWebhookCheckoutToggle | setEcProducts(?MerchantWebhookCheckoutToggle ecProducts): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookCheckoutConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCheckoutToggleBuilder;
use UnivaPay\ApiHelper;

$merchantWebhookCheckoutConfiguration = MerchantWebhookCheckoutConfigurationBuilder::init()
    ->ecEmail(
        MerchantWebhookCheckoutToggleBuilder::init()
            ->enabled(true)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->ecProducts(
        MerchantWebhookCheckoutToggleBuilder::init()
            ->enabled(true)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

