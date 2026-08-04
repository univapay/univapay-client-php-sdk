<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;

/**
 * Request payload for updating a subscription.
 */
class SubscriptionUpdateRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $transactionTokenId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var SubscriptionUpdateScheduleSettings|null
     */
    private $scheduleSettings;

    /**
     * @var SubscriptionUpdateNextPayment|null
     */
    private $nextPayment;

    /**
     * Returns Transaction Token Id.
     * Transaction token ID used for the subscription.  Can be changed to update the payment method (e.g.,
     * when a card expires).  Allowed only when the status is `unconfirmed`, `unpaid`, `current`, or
     * `suspended`.
     */
    public function getTransactionTokenId(): ?string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token ID used for the subscription.  Can be changed to update the payment method (e.g.,
     * when a card expires).  Allowed only when the status is `unconfirmed`, `unpaid`, `current`, or
     * `suspended`.
     *
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(?string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Amount.
     * The recurring charge amount (applied to the cycle after the next one).  Not available for limited-
     * cycle subscriptions.  To change the immediate next payment amount, update `next_payment.amount`
     * instead.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The recurring charge amount (applied to the cycle after the next one).  Not available for limited-
     * cycle subscriptions.  To change the immediate next payment amount, update `next_payment.amount`
     * instead.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getMetadata(): ?GenericMetadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?GenericMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Status.
     * Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended
     * subscription.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended
     * subscription.
     *
     * @maps status
     * @factory \UnivaPay\Models\SubscriptionUpdateStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Schedule Settings.
     * Schedule settings that can be updated on a subscription.
     */
    public function getScheduleSettings(): ?SubscriptionUpdateScheduleSettings
    {
        return $this->scheduleSettings;
    }

    /**
     * Sets Schedule Settings.
     * Schedule settings that can be updated on a subscription.
     *
     * @maps schedule_settings
     */
    public function setScheduleSettings(?SubscriptionUpdateScheduleSettings $scheduleSettings): void
    {
        $this->scheduleSettings = $scheduleSettings;
    }

    /**
     * Returns Next Payment.
     * Fields that can be updated on the next scheduled payment.
     */
    public function getNextPayment(): ?SubscriptionUpdateNextPayment
    {
        return $this->nextPayment;
    }

    /**
     * Sets Next Payment.
     * Fields that can be updated on the next scheduled payment.
     *
     * @maps next_payment
     */
    public function setNextPayment(?SubscriptionUpdateNextPayment $nextPayment): void
    {
        $this->nextPayment = $nextPayment;
    }

    /**
     * Converts the SubscriptionUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionUpdateRequest',
            [
                'transactionTokenId' => $this->transactionTokenId,
                'amount' => $this->amount,
                'metadata' => $this->metadata,
                'status' => $this->status,
                'scheduleSettings' => $this->scheduleSettings,
                'nextPayment' => $this->nextPayment,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'transaction_token_id',
        'amount',
        'metadata',
        'status',
        'schedule_settings',
        'next_payment'
    ];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->transactionTokenId)) {
            $json['transaction_token_id'] = $this->transactionTokenId;
        }
        if (isset($this->amount)) {
            $json['amount']               = $this->amount;
        }
        if (isset($this->metadata)) {
            $json['metadata']             = $this->metadata;
        }
        if (isset($this->status)) {
            $json['status']               = SubscriptionUpdateStatus::checkValue($this->status);
        }
        if (isset($this->scheduleSettings)) {
            $json['schedule_settings']    = $this->scheduleSettings;
        }
        if (isset($this->nextPayment)) {
            $json['next_payment']         = $this->nextPayment;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
