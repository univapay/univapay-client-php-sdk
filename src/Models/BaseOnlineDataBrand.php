<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Base Online Data Brand schema.
 */
class BaseOnlineDataBrand
{
    public const ALIPAY_ONLINE = 'alipay_online';

    public const ALIPAY_PLUS_ONLINE = 'alipay_plus_online';

    public const PAY_PAY_ONLINE = 'pay_pay_online';

    public const WE_CHAT_ONLINE = 'we_chat_online';

    public const D_BARAI_ONLINE = 'd_barai_online';

    private const _ALL_VALUES = [
        self::ALIPAY_ONLINE,
        self::ALIPAY_PLUS_ONLINE,
        self::PAY_PAY_ONLINE,
        self::WE_CHAT_ONLINE,
        self::D_BARAI_ONLINE
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for BaseOnlineDataBrand.");
    }
}
