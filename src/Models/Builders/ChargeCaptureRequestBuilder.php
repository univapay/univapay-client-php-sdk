<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCaptureRequest;

/**
 * Builder for model ChargeCaptureRequest
 *
 * @see ChargeCaptureRequest
 */
class ChargeCaptureRequestBuilder
{
    /**
     * @var ChargeCaptureRequest
     */
    private $instance;

    private function __construct(ChargeCaptureRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Capture Request Builder object.
     *
     * @param int $amount
     * @param string $currency
     */
    public static function init(int $amount, string $currency): self
    {
        return new self(new ChargeCaptureRequest($amount, $currency));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Charge Capture Request object.
     */
    public function build(): ChargeCaptureRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
