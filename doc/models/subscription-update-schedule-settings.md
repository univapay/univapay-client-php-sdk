
# Subscription Update Schedule Settings

Schedule settings that can be updated on a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionUpdateScheduleSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `terminationMode` | [`?string(SubscriptionTerminationMode)`](../../doc/models/subscription-termination-mode.md) | Optional | Subscription Termination Mode schema.<br><br>**Default**: `SubscriptionTerminationMode::IMMEDIATE` | getTerminationMode(): ?string | setTerminationMode(?string terminationMode): void |
| `startOn` | `?DateTime` | Optional | Subscription start date. Used to change the first actual charge date  for subscriptions that initially only registered a payment method. | getStartOn(): ?\DateTime | setStartOn(?\DateTime startOn): void |
| `retryInterval` | `?string` | Optional | ISO-8601 Duration for retry interval if payment fails  (e.g., P3D for 3 days, PT48H for 48 hours). | getRetryInterval(): ?string | setRetryInterval(?string retryInterval): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionUpdateScheduleSettingsBuilder;

$subscriptionUpdateScheduleSettings = SubscriptionUpdateScheduleSettingsBuilder::init()->build();
```

