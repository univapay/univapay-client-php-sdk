
# Subscription Plan Settings

Configuration for limited-cycle subscriptions (Univapay side).

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPlanSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planType` | [`?string(PlanSettingsType)`](../../doc/models/plan-settings-type.md) | Optional | Plan type selector. | getPlanType(): ?string | setPlanType(?string planType): void |
| `fixedCycles` | `?int` | Optional | Number of cycles for fixed_cycles plan. | getFixedCycles(): ?int | setFixedCycles(?int fixedCycles): void |
| `fixedCycleAmount` | `?int` | Optional | Total target amount for fixed_cycle_amount plan. | getFixedCycleAmount(): ?int | setFixedCycleAmount(?int fixedCycleAmount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPlanSettingsBuilder;
use UnivaPay\Models\PlanSettingsType;
use UnivaPay\ApiHelper;

$subscriptionPlanSettings = SubscriptionPlanSettingsBuilder::init()
    ->planType(PlanSettingsType::FIXED_CYCLES)
    ->fixedCycles(240)
    ->fixedCycleAmount(50)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

