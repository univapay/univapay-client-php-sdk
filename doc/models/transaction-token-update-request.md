
# Transaction Token Update Request

Request payload for updating a transaction token.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `data` | [`?TransactionTokenUpdateRequestData`](../../doc/models/transaction-token-update-request-data.md) | Optional | Transaction Token Update Request Data schema. | getData(): ?TransactionTokenUpdateRequestData | setData(?TransactionTokenUpdateRequestData data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestBuilder;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestDataBuilder;
use UnivaPay\ApiHelper;

$transactionTokenUpdateRequest = TransactionTokenUpdateRequestBuilder::init()
    ->email('new_email@test.com')
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String4')
            ->build()
    )
    ->data(
        TransactionTokenUpdateRequestDataBuilder::init()
            ->cvv('123')
            ->cardholder('TARO YAMADA')
            ->cardNumber('card_number6')
            ->expMonth(12)
            ->expYear(2028)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

