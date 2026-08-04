
# Subscription Installment Plan

Configuration for credit card company side installments.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionInstallmentPlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planType` | [`?string(InstallmentPlanType)`](../../doc/models/installment-plan-type.md) | Optional | Plan type selector. | getPlanType(): ?string | setPlanType(?string planType): void |
| `fixedCycles` | [`?int(InstallmentFixedCycles)`](../../doc/models/installment-fixed-cycles.md) | Optional | Required if plan_type is fixed_cycles. | getFixedCycles(): ?int | setFixedCycles(?int fixedCycles): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionInstallmentPlanBuilder;
use UnivaPay\Models\InstallmentPlanType;
use UnivaPay\Models\InstallmentFixedCycles;
use UnivaPay\ApiHelper;

$subscriptionInstallmentPlan = SubscriptionInstallmentPlanBuilder::init()
    ->planType(InstallmentPlanType::REVOLVING)
    ->fixedCycles(InstallmentFixedCycles::CYCLES_3)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

