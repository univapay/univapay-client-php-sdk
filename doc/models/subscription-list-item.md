
# Subscription List Item

Subscription entry returned in list responses.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionListItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `transactionTokenId` | `?string` | Optional | Transaction token identifier. | getTransactionTokenId(): ?string | setTransactionTokenId(?string transactionTokenId): void |
| `amount` | `?int` | Optional | Amount in the smallest currency unit. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `initialAmount` | `?int` | Optional | Initial amount in the smallest currency unit. | getInitialAmount(): ?int | setInitialAmount(?int initialAmount): void |
| `initialAmountFormatted` | `?float` | Optional | Initial amount formatted for display. | getInitialAmountFormatted(): ?float | setInitialAmountFormatted(?float initialAmountFormatted): void |
| `subsequentCyclesStart` | `?DateTime` | Optional | Timestamp when recurring cycles begin. | getSubsequentCyclesStart(): ?\DateTime | setSubsequentCyclesStart(?\DateTime subsequentCyclesStart): void |
| `scheduleSettings` | [`?SubscriptionScheduleSettings`](../../doc/models/subscription-schedule-settings.md) | Optional | Schedule settings applied to a subscription. | getScheduleSettings(): ?SubscriptionScheduleSettings | setScheduleSettings(?SubscriptionScheduleSettings scheduleSettings): void |
| `onlyDirectCurrency` | `?bool` | Optional | Whether only direct currency processing is allowed. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `firstChargeCaptureAfter` | `?string` | Optional | ISO-8601 Duration (e.g., P3D). | getFirstChargeCaptureAfter(): ?string | setFirstChargeCaptureAfter(?string firstChargeCaptureAfter): void |
| `firstChargeAuthorizationOnly` | `?bool` | Optional | Whether the first charge is authorization-only. | getFirstChargeAuthorizationOnly(): ?bool | setFirstChargeAuthorizationOnly(?bool firstChargeAuthorizationOnly): void |
| `status` | [`?string(SubscriptionStatus)`](../../doc/models/subscription-status.md) | Optional | Subscription Status schema. | getStatus(): ?string | setStatus(?string status): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Optional | Charge Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `period` | [`?string(SubscriptionPeriod)`](../../doc/models/subscription-period.md) | Optional | Subscription Period schema. | getPeriod(): ?string | setPeriod(?string period): void |
| `nextPayment` | [`?SubscriptionNextPayment`](../../doc/models/subscription-next-payment.md) | Optional | Next scheduled payment details for a subscription. | getNextPayment(): ?SubscriptionNextPayment | setNextPayment(?SubscriptionNextPayment nextPayment): void |
| `merchantName` | `?string` | Optional | Merchant display name. | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `storeName` | `?string` | Optional | Store display name. | getStoreName(): ?string | setStoreName(?string storeName): void |
| `paymentType` | `?string` | Optional | Payment method type. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `nextPaymentDate` | `?DateTime` | Optional | Next payment date value. | getNextPaymentDate(): ?\DateTime | setNextPaymentDate(?\DateTime nextPaymentDate): void |
| `userData` | [`?SubscriptionUserData`](../../doc/models/subscription-user-data.md) | Optional | Customer-facing payment method summary data. | getUserData(): ?SubscriptionUserData | setUserData(?SubscriptionUserData userData): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\SubscriptionUserDataBuilder;

$subscriptionListItem = SubscriptionListItemBuilder::init()
    ->id('11ef335e-9aa5-c54a-8313-7f9847da313a')
    ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
    ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
    ->amount(1250)
    ->currency('USD')
    ->amountFormatted(12.5)
    ->status(SubscriptionStatus::CURRENT)
    ->merchantName('管理画面ガイド')
    ->storeName('管理画面ガイド_TEST店舗')
    ->paymentType('card')
    ->nextPaymentDate(DateTimeHelper::fromSimpleDate('2024-07-26'))
    ->userData(
        SubscriptionUserDataBuilder::init()
            ->type('charge')
            ->cardholderName('taro yamada')
            ->email('test@test.com')
            ->brand('visa')
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

