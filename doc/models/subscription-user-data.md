
# Subscription User Data

Customer-facing payment method summary data.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionUserData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Type of the resource. | getType(): ?string | setType(?string type): void |
| `cardholderName` | `?string` | Optional | Cardholder name value. | getCardholderName(): ?string | setCardholderName(?string cardholderName): void |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `brand` | `?string` | Optional | Brand or network name. | getBrand(): ?string | setBrand(?string brand): void |
| `gateway` | `?string` | Optional | Gateway identifier. | getGateway(): ?string | setGateway(?string gateway): void |
| `serviceProvider` | `?string` | Optional | Service provider identifier. | getServiceProvider(): ?string | setServiceProvider(?string serviceProvider): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionUserDataBuilder;
use UnivaPay\ApiHelper;

$subscriptionUserData = SubscriptionUserDataBuilder::init()
    ->type('type8')
    ->cardholderName('cardholder_name2')
    ->email('email4')
    ->brand('brand6')
    ->gateway('gateway2')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

