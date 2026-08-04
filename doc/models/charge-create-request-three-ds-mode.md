
# Charge Create Request Three Ds Mode

3D-Secure authentication type. App Token Secret is required to use 'skip'.

## Enumeration

`ChargeCreateRequestThreeDsMode`

## Fields

| Name |
|  --- |
| `NORMAL` |
| `REQUIRE_` |
| `FORCE` |
| `SKIP` |

## Example

```php
use UnivaPay\Models\ChargeCreateRequestThreeDsMode;

$chargeCreateRequestThreeDsMode = ChargeCreateRequestThreeDsMode::FORCE;
```

