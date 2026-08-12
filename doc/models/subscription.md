
# Subscription

The Subscription object represents a recurring payment schedule.

*This model accepts additional fields of type array.*

## Structure

`Subscription`

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
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\SubscriptionScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionTerminationMode;
use UnivaPay\ApiHelper;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Models\SubscriptionPeriod;
use UnivaPay\Models\Builders\SubscriptionNextPaymentBuilder;

$subscription = SubscriptionBuilder::init()
    ->id('11ef335e-9aa5-c54a-8313-7f9847da313a')
    ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
    ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
    ->amount(1250)
    ->currency('USD')
    ->amountFormatted(12.5)
    ->scheduleSettings(
        SubscriptionScheduleSettingsBuilder::init()
            ->startOn(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->zoneId('zone_id8')
            ->preserveEndOfMonth(false)
            ->retryInterval('retry_interval2')
            ->terminationMode(SubscriptionTerminationMode::IMMEDIATE)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->onlyDirectCurrency(false)
    ->firstChargeAuthorizationOnly(false)
    ->status(SubscriptionStatus::CURRENT)
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String4')
            ->build()
    )
    ->mode(ChargeMode::LIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-26T01:51:28.627023Z'))
    ->period(SubscriptionPeriod::MONTHLY)
    ->nextPayment(
        SubscriptionNextPaymentBuilder::init()
            ->id('00000110-0000-0000-0000-000000000000')
            ->dueDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->zoneId('zone_id8')
            ->amount(126)
            ->currency('currency8')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

