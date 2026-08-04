
# Transaction Token Data

Transaction token data payload. The actual structure depends on `payment_type` — card, konbini, online (QR / 3DS), or bank transfer.

## Data Type

`TokenResponseCardData|TokenResponseKonbiniData|TokenResponseOnlineData|TokenResponseBankTransferData`

## Cases

| Type |
|  --- |
| [`TokenResponseCardData`](../../../doc/models/token-response-card-data.md) |
| [`TokenResponseKonbiniData`](../../../doc/models/token-response-konbini-data.md) |
| [`TokenResponseOnlineData`](../../../doc/models/token-response-online-data.md) |
| [`TokenResponseBankTransferData`](../../../doc/models/token-response-bank-transfer-data.md) |

## TokenResponseCardData

### Initialization Code

#### Example

```php
$value = TokenResponseCardDataBuilder::init()
    ->card(
        TokenResponseCardDataCardBuilder::init()
            ->cardholder('TARO YAMADA')
            ->expMonth(12)
            ->expYear(2026)
            ->cardBin('424242')
            ->lastFour('4242')
            ->brand('visa')
            ->cardType('credit')
            ->country('JP')
            ->category('standard')
            ->issuer(null)
            ->subBrand('none')
            ->build()
    )
    ->billing(
        TokenResponseCardDataBillingBuilder::init()
            ->line1('1-1-1')
            ->line2('Shibakoen')
            ->state('Tokyo')
            ->city('Minato')
            ->country('JP')
            ->zip('105-0011')
            ->phoneNumber(
                TokenResponsePhoneNumberBuilder::init()
                    ->countryCode(81)
                    ->localNumber('08012341234')
                    ->build()
            )
            ->build()
    )
    ->cvvAuthorize(
        TokenResponseCardDataCvvAuthorizeBuilder::init()
            ->enabled(true)
            ->status('successful')
            ->chargeId(null)
            ->credentialsId(null)
            ->currency('JPY')
            ->build()
    )
    ->cvvAuthorizeCheck(
        TokenResponseCardDataCvvAuthorizeCheckBuilder::init()
            ->status('successful')
            ->chargeId(null)
            ->date(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
            ->build()
    )
    ->threeDs(
        TokenResponseCardDataThreeDsBuilder::init()
            ->enabled(true)
            ->status(TokenResponseCardDataThreeDsStatus::SUCCESSFUL)
            ->redirectEndpoint(null)
            ->redirectId(null)
            ->exempted(false)
            ->error(
                null
            )
            ->build()
    )
    ->build();
```

## TokenResponseKonbiniData

### Initialization Code

#### Example

```php
$value = TokenResponseKonbiniDataBuilder::init()
    ->customerName('Taro Yamada')
    ->convenienceStore(BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN)
    ->expirationPeriod('P7D')
    ->expirationTimeShift(null)
    ->phoneNumber(
        TokenResponsePhoneNumberBuilder::init()
            ->countryCode(81)
            ->localNumber('08012341234')
            ->build()
    )
    ->build();
```

## TokenResponseOnlineData

### Initialization Code

#### Example

```php
$value = TokenResponseOnlineDataBuilder::init()
    ->brand(BaseOnlineDataBrand::WE_CHAT_ONLINE)
    ->callMethod(BaseOnlineDataCallMethod::WEB)
    ->userIdentifier('wechat_open_id_12345')
    ->build();
```

## TokenResponseBankTransferData

### Initialization Code

#### Example

```php
$value = TokenResponseBankTransferDataBuilder::init()
    ->brand('aozora_bank')
    ->expirationPeriod('PT168H')
    ->expirationTimeShift('23:59:59+09:00')
    ->bankCode('0310')
    ->bankName('GMOあおぞらネット銀行')
    ->branchCode('123')
    ->branchName('Test Branch')
    ->accountNumber('1234567')
    ->accountHolderName('TARO YAMADA')
    ->build();
```

