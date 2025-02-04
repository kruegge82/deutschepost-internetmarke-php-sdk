<?php
/**
 * CashOnDelivery
 *
 * PHP version 8.1
 *
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deutsche Post INTERNETMARKE API
 *
 * Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.
 *
 * The version of the OpenAPI document: 1.26
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DPIM\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use kruegge82\DPIM\ObjectSerializer;

/**
 * CashOnDelivery Class Doc Comment
 *
 * @description The details for cash on delivery. Required only for cash on delivery products.
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CashOnDelivery implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CashOnDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payment_recipient' => 'string',
        'payment_reference' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'account_owner' => 'string',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payment_recipient' => null,
        'payment_reference' => null,
        'iban' => null,
        'bic' => null,
        'account_owner' => null,
        'amount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payment_recipient' => false,
        'payment_reference' => false,
        'iban' => false,
        'bic' => false,
        'account_owner' => false,
        'amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'payment_recipient' => 'paymentRecipient',
        'payment_reference' => 'paymentReference',
        'iban' => 'iban',
        'bic' => 'bic',
        'account_owner' => 'accountOwner',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payment_recipient' => 'setPaymentRecipient',
        'payment_reference' => 'setPaymentReference',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'account_owner' => 'setAccountOwner',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payment_recipient' => 'getPaymentRecipient',
        'payment_reference' => 'getPaymentReference',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'account_owner' => 'getAccountOwner',
        'amount' => 'getAmount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('payment_recipient', $data ?? [], null);
        $this->setIfExists('payment_reference', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('bic', $data ?? [], null);
        $this->setIfExists('account_owner', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['payment_recipient'] === null) {
            $invalidProperties[] = "'payment_recipient' can't be null";
        }
        if ((mb_strlen($this->container['payment_recipient']) > 54)) {
            $invalidProperties[] = "invalid value for 'payment_recipient', the character length must be smaller than or equal to 54.";
        }

        if ((mb_strlen($this->container['payment_recipient']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_recipient', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['payment_reference'] === null) {
            $invalidProperties[] = "'payment_reference' can't be null";
        }
        if ((mb_strlen($this->container['payment_reference']) > 140)) {
            $invalidProperties[] = "invalid value for 'payment_reference', the character length must be smaller than or equal to 140.";
        }

        if ((mb_strlen($this->container['payment_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'payment_reference', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
        }
        if ((mb_strlen($this->container['iban']) > 34)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 34.";
        }

        if ((mb_strlen($this->container['iban']) < 15)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be bigger than or equal to 15.";
        }

        if (!preg_match("/^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/", $this->container['iban'])) {
            $invalidProperties[] = "invalid value for 'iban', must be conform to the pattern /^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/.";
        }

        if ($this->container['bic'] === null) {
            $invalidProperties[] = "'bic' can't be null";
        }
        if ((mb_strlen($this->container['bic']) > 11)) {
            $invalidProperties[] = "invalid value for 'bic', the character length must be smaller than or equal to 11.";
        }

        if ((mb_strlen($this->container['bic']) < 8)) {
            $invalidProperties[] = "invalid value for 'bic', the character length must be bigger than or equal to 8.";
        }

        if (!preg_match("/^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/", $this->container['bic'])) {
            $invalidProperties[] = "invalid value for 'bic', must be conform to the pattern /^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/.";
        }

        if ($this->container['account_owner'] === null) {
            $invalidProperties[] = "'account_owner' can't be null";
        }
        if ((mb_strlen($this->container['account_owner']) > 54)) {
            $invalidProperties[] = "invalid value for 'account_owner', the character length must be smaller than or equal to 54.";
        }

        if ((mb_strlen($this->container['account_owner']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_owner', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 160000)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 160000.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payment_recipient
     *
     * @return string
     */
    public function getPaymentRecipient(): string
    {
        return $this->container['payment_recipient'];
    }

    /**
     * Sets payment_recipient
     *
     * @param string $payment_recipient The recipient of the payment. All characters are allowed except <, &.
     *
     * @return $this
     */
    public function setPaymentRecipient(string $payment_recipient): static
    {
        if (is_null($payment_recipient)) {
            throw new InvalidArgumentException('non-nullable payment_recipient cannot be null');
        }
        if ((mb_strlen($payment_recipient) > 54)) {
            throw new InvalidArgumentException('invalid length for $payment_recipient when calling CashOnDelivery., must be smaller than or equal to 54.');
        }
        if ((mb_strlen($payment_recipient) < 1)) {
            throw new InvalidArgumentException('invalid length for $payment_recipient when calling CashOnDelivery., must be bigger than or equal to 1.');
        }

        $this->container['payment_recipient'] = $payment_recipient;

        return $this;
    }

    /**
     * Gets payment_reference
     *
     * @return string
     */
    public function getPaymentReference(): string
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param string $payment_reference The payment reference. All characters are allowed except <, &.
     *
     * @return $this
     */
    public function setPaymentReference(string $payment_reference): static
    {
        if (is_null($payment_reference)) {
            throw new InvalidArgumentException('non-nullable payment_reference cannot be null');
        }
        if ((mb_strlen($payment_reference) > 140)) {
            throw new InvalidArgumentException('invalid length for $payment_reference when calling CashOnDelivery., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($payment_reference) < 0)) {
            throw new InvalidArgumentException('invalid length for $payment_reference when calling CashOnDelivery., must be bigger than or equal to 0.');
        }

        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban The IBAN of the payment receiver with international syntax and without spaces
     *
     * @return $this
     */
    public function setIban(string $iban): static
    {
        if (is_null($iban)) {
            throw new InvalidArgumentException('non-nullable iban cannot be null');
        }
        if ((mb_strlen($iban) > 34)) {
            throw new InvalidArgumentException('invalid length for $iban when calling CashOnDelivery., must be smaller than or equal to 34.');
        }
        if ((mb_strlen($iban) < 15)) {
            throw new InvalidArgumentException('invalid length for $iban when calling CashOnDelivery., must be bigger than or equal to 15.');
        }
        if ((!preg_match("/^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/", ObjectSerializer::toString($iban)))) {
            throw new InvalidArgumentException("invalid value for \$iban when calling CashOnDelivery., must conform to the pattern /^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/.");
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic(): string
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic The BIC of the payment receiver with international syntax and without spaces
     *
     * @return $this
     */
    public function setBic(string $bic): static
    {
        if (is_null($bic)) {
            throw new InvalidArgumentException('non-nullable bic cannot be null');
        }
        if ((mb_strlen($bic) > 11)) {
            throw new InvalidArgumentException('invalid length for $bic when calling CashOnDelivery., must be smaller than or equal to 11.');
        }
        if ((mb_strlen($bic) < 8)) {
            throw new InvalidArgumentException('invalid length for $bic when calling CashOnDelivery., must be bigger than or equal to 8.');
        }
        if ((!preg_match("/^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/", ObjectSerializer::toString($bic)))) {
            throw new InvalidArgumentException("invalid value for \$bic when calling CashOnDelivery., must conform to the pattern /^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/.");
        }

        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets account_owner
     *
     * @return string
     */
    public function getAccountOwner(): string
    {
        return $this->container['account_owner'];
    }

    /**
     * Sets account_owner
     *
     * @param string $account_owner Target account owner.
     *
     * @return $this
     */
    public function setAccountOwner(string $account_owner): static
    {
        if (is_null($account_owner)) {
            throw new InvalidArgumentException('non-nullable account_owner cannot be null');
        }
        if ((mb_strlen($account_owner) > 54)) {
            throw new InvalidArgumentException('invalid length for $account_owner when calling CashOnDelivery., must be smaller than or equal to 54.');
        }
        if ((mb_strlen($account_owner) < 1)) {
            throw new InvalidArgumentException('invalid length for $account_owner when calling CashOnDelivery., must be bigger than or equal to 1.');
        }

        $this->container['account_owner'] = $account_owner;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Cash on delivery amount in euro cents.
     *
     * @return $this
     */
    public function setAmount(int $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount > 160000)) {
            throw new InvalidArgumentException('invalid value for $amount when calling CashOnDelivery., must be smaller than or equal to 160000.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


