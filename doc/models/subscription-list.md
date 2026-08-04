
# Subscription List

Paginated list of subscriptions.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(SubscriptionListItem[])`](../../doc/models/subscription-list-item.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching resources. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionListBuilder;
use UnivaPay\Models\Builders\SubscriptionListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\SubscriptionUserDataBuilder;

$subscriptionList = SubscriptionListBuilder::init()
    ->items(
        [
            SubscriptionListItemBuilder::init()
                ->id('11ef3410-aaaa-4bcd-8e1f-1a2b3c4d5e60')
                ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
                ->transactionTokenId('11ef3413-dddd-4ef0-b142-4d5e6f809193')
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
                        ->email('taro@test.com')
                        ->brand('visa')
                        ->build()
                )
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            SubscriptionListItemBuilder::init()
                ->id('11ef3411-bbbb-4cde-9f20-2b3c4d5e6f71')
                ->storeId('22af6520-d53e-764d-9d4e-ef01b66fa6d1')
                ->transactionTokenId('11ef3414-eeee-4f01-c253-5e6f80919204')
                ->amount(3000)
                ->currency('JPY')
                ->amountFormatted(3000)
                ->status(SubscriptionStatus::CURRENT)
                ->merchantName('管理画面ガイド')
                ->storeName('管理画面ガイド_Online店舗')
                ->paymentType('card')
                ->nextPaymentDate(DateTimeHelper::fromSimpleDate('2024-08-10'))
                ->userData(
                    SubscriptionUserDataBuilder::init()
                        ->type('charge')
                        ->cardholderName('hanako suzuki')
                        ->email('hanako@test.com')
                        ->brand('mastercard')
                        ->build()
                )
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

