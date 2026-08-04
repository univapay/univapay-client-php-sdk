
# Token Response Online Data

Token Response Online Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseOnlineData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | [`?string(BaseOnlineDataBrand)`](../../doc/models/base-online-data-brand.md) | Optional | Base Online Data Brand schema. | getBrand(): ?string | setBrand(?string brand): void |
| `callMethod` | [`?string(BaseOnlineDataCallMethod)`](../../doc/models/base-online-data-call-method.md) | Optional | Base Online Data Call Method schema. | getCallMethod(): ?string | setCallMethod(?string callMethod): void |
| `osType` | [`?string(BaseOnlineDataOsType)`](../../doc/models/base-online-data-os-type.md) | Optional | Base Online Data Os Type schema. | getOsType(): ?string | setOsType(?string osType): void |
| `userIdentifier` | `?string` | Optional | Consumer specific identifier required by some gateways for fraud prevention. | getUserIdentifier(): ?string | setUserIdentifier(?string userIdentifier): void |
| `userIdentifierSource` | [`?string(BaseOnlineDataUserIdentifierSource)`](../../doc/models/base-online-data-user-identifier-source.md) | Optional | The source of the user identifier | getUserIdentifierSource(): ?string | setUserIdentifierSource(?string userIdentifierSource): void |
| `issuerToken` | `?string` | Optional | Token provided by the issuer (if applicable). | getIssuerToken(): ?string | setIssuerToken(?string issuerToken): void |
| `issuerTokenPayload` | `?string` | Optional | Additional payload from the issuer. | getIssuerTokenPayload(): ?string | setIssuerTokenPayload(?string issuerTokenPayload): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseOnlineDataBuilder;
use UnivaPay\Models\BaseOnlineDataBrand;
use UnivaPay\Models\BaseOnlineDataCallMethod;
use UnivaPay\Models\BaseOnlineDataOsType;
use UnivaPay\Models\BaseOnlineDataUserIdentifierSource;
use UnivaPay\ApiHelper;

$tokenResponseOnlineData = TokenResponseOnlineDataBuilder::init()
    ->brand(BaseOnlineDataBrand::WE_CHAT_ONLINE)
    ->callMethod(BaseOnlineDataCallMethod::WEB)
    ->osType(BaseOnlineDataOsType::ANDROID)
    ->userIdentifier('wechat_open_id_12345')
    ->userIdentifierSource(BaseOnlineDataUserIdentifierSource::PROVIDED)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

