
# Merchant

Merchant resource returned by the backend `FullMerchantWithGroupRoles` formatter for merchant-authenticated callers.

*This model accepts additional fields of type array.*

## Structure

`Merchant`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Merchant identifier. | getId(): ?string | setId(?string id): void |
| `verificationDataId` | `?string` | Optional | Verification data identifier associated with the merchant. | getVerificationDataId(): ?string | setVerificationDataId(?string verificationDataId): void |
| `name` | `?string` | Optional | Merchant display name. | getName(): ?string | setName(?string name): void |
| `email` | `?string` | Optional | Primary merchant email address. | getEmail(): ?string | setEmail(?string email): void |
| `notificationEmail` | `?string` | Optional | Merchant notification email address. | getNotificationEmail(): ?string | setNotificationEmail(?string notificationEmail): void |
| `financeNotificationEmail` | `?string` | Optional | Merchant finance notification email address. | getFinanceNotificationEmail(): ?string | setFinanceNotificationEmail(?string financeNotificationEmail): void |
| `verified` | `?bool` | Optional | Whether the merchant has completed verification. | getVerified(): ?bool | setVerified(?bool verified): void |
| `configuration` | [`?MerchantWebhookConfiguration`](../../doc/models/merchant-webhook-configuration.md) | Optional | Merchant configuration snapshot serialized by gyron-payments-api. | getConfiguration(): ?MerchantWebhookConfiguration | setConfiguration(?MerchantWebhookConfiguration configuration): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the merchant was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantBuilder;
use UnivaPay\Models\Builders\MerchantWebhookConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;
use UnivaPay\Models\Builders\MerchantWebhookUserTransactionsConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCardConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookOnlineConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookBankTransferConfigurationBuilder;
use UnivaPay\Utils\DateTimeHelper;

$merchant = MerchantBuilder::init()
    ->id('11ef0000-0000-4000-8000-000000000020')
    ->verificationDataId('11ef0000-0000-4000-8000-000000000021')
    ->name('Example Merchant')
    ->email('owner@example.com')
    ->notificationEmail('alerts@example.com')
    ->financeNotificationEmail('finance@example.com')
    ->verified(true)
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
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

