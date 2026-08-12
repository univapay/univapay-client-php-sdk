
# Store

Store resource returned by the backend `FullStore` formatter. It combines core store identity with the resolved configuration snapshot used for runtime policy evaluation.

*This model accepts additional fields of type array.*

## Structure

`Store`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Store identifier. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | Store display name. | getName(): ?string | setName(?string name): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the store was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `configuration` | [`?MerchantWebhookConfiguration`](../../doc/models/merchant-webhook-configuration.md) | Optional | Store-scoped configuration snapshot serialized by gyron-payments-api. It uses the same flattened serializer as merchant configuration, but omits `transfer_schedule`. | getConfiguration(): ?MerchantWebhookConfiguration | setConfiguration(?MerchantWebhookConfiguration configuration): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\StoreBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\MerchantWebhookConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;
use UnivaPay\Models\Builders\MerchantWebhookUserTransactionsConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCardConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookOnlineConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookBankTransferConfigurationBuilder;

$store = StoreBuilder::init()
    ->id('11ef0000-0000-4000-8000-000000000022')
    ->name('Tokyo Store')
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->configuration(
        MerchantWebhookConfigurationBuilder::init()
            ->percentFee(3.6)
            ->country('JP')
            ->language('ja')
            ->minimumChargeAmounts(
                [
                    MerchantWebhookMoneyAmountBuilder::init()
                        ->amount(100)
                        ->currency('JPY')
                        ->build()
                ]
            )
            ->maximumChargeAmounts(
                [
                    MerchantWebhookMoneyAmountBuilder::init()
                        ->amount(100000)
                        ->currency('JPY')
                        ->build()
                ]
            )
            ->userTransactionsConfiguration(
                MerchantWebhookUserTransactionsConfigurationBuilder::init()
                    ->enabled(true)
                    ->notifyCustomer(true)
                    ->notifyOnWebhookFailure(true)
                    ->build()
            )
            ->cardConfiguration(
                MerchantWebhookCardConfigurationBuilder::init()
                    ->enabled(true)
                    ->debitEnabled(true)
                    ->prepaidEnabled(false)
                    ->threeDsRequired(true)
                    ->build()
            )
            ->onlineConfiguration(
                MerchantWebhookOnlineConfigurationBuilder::init()
                    ->enabled(true)
                    ->build()
            )
            ->bankTransferConfiguration(
                MerchantWebhookBankTransferConfigurationBuilder::init()
                    ->enabled(true)
                    ->matchAmount(true)
                    ->expiration('P7D')
                    ->build()
            )
            ->build()
    )
    ->build();
```

