<?php
/**
 * RetoureState
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
 * RetoureState Class Doc Comment
 *
 * @description The representation of the status for already submitted refund.
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RetoureState implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RetoureState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'retoure_transaction_id' => 'int',
        'shop_retoure_id' => 'string',
        'total_count' => 'int',
        'count_still_open' => 'int',
        'retoure_price' => 'int',
        'creation_date' => 'string',
        'serialnumber' => 'string',
        'refunded_vouchers' => '\kruegge82\DPIM\Model\Voucher[]',
        'not_refunded_vouchers' => '\kruegge82\DPIM\Model\Voucher[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'retoure_transaction_id' => 'int32',
        'shop_retoure_id' => null,
        'total_count' => 'int32',
        'count_still_open' => 'int32',
        'retoure_price' => 'int32',
        'creation_date' => null,
        'serialnumber' => null,
        'refunded_vouchers' => null,
        'not_refunded_vouchers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'retoure_transaction_id' => false,
        'shop_retoure_id' => false,
        'total_count' => false,
        'count_still_open' => false,
        'retoure_price' => false,
        'creation_date' => false,
        'serialnumber' => false,
        'refunded_vouchers' => false,
        'not_refunded_vouchers' => false
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
        'retoure_transaction_id' => 'retoureTransactionId',
        'shop_retoure_id' => 'shopRetoureId',
        'total_count' => 'totalCount',
        'count_still_open' => 'countStillOpen',
        'retoure_price' => 'retourePrice',
        'creation_date' => 'creationDate',
        'serialnumber' => 'serialnumber',
        'refunded_vouchers' => 'refundedVouchers',
        'not_refunded_vouchers' => 'notRefundedVouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'retoure_transaction_id' => 'setRetoureTransactionId',
        'shop_retoure_id' => 'setShopRetoureId',
        'total_count' => 'setTotalCount',
        'count_still_open' => 'setCountStillOpen',
        'retoure_price' => 'setRetourePrice',
        'creation_date' => 'setCreationDate',
        'serialnumber' => 'setSerialnumber',
        'refunded_vouchers' => 'setRefundedVouchers',
        'not_refunded_vouchers' => 'setNotRefundedVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'retoure_transaction_id' => 'getRetoureTransactionId',
        'shop_retoure_id' => 'getShopRetoureId',
        'total_count' => 'getTotalCount',
        'count_still_open' => 'getCountStillOpen',
        'retoure_price' => 'getRetourePrice',
        'creation_date' => 'getCreationDate',
        'serialnumber' => 'getSerialnumber',
        'refunded_vouchers' => 'getRefundedVouchers',
        'not_refunded_vouchers' => 'getNotRefundedVouchers'
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
        $this->setIfExists('retoure_transaction_id', $data ?? [], null);
        $this->setIfExists('shop_retoure_id', $data ?? [], null);
        $this->setIfExists('total_count', $data ?? [], null);
        $this->setIfExists('count_still_open', $data ?? [], null);
        $this->setIfExists('retoure_price', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('serialnumber', $data ?? [], null);
        $this->setIfExists('refunded_vouchers', $data ?? [], null);
        $this->setIfExists('not_refunded_vouchers', $data ?? [], null);
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

        if ($this->container['shop_retoure_id'] === null) {
            $invalidProperties[] = "'shop_retoure_id' can't be null";
        }
        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['serialnumber'] === null) {
            $invalidProperties[] = "'serialnumber' can't be null";
        }
        if (!preg_match("/^\\S{10}$/", $this->container['serialnumber'])) {
            $invalidProperties[] = "invalid value for 'serialnumber', must be conform to the pattern /^\\S{10}$/.";
        }

        if ($this->container['refunded_vouchers'] === null) {
            $invalidProperties[] = "'refunded_vouchers' can't be null";
        }
        if ((count($this->container['refunded_vouchers']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'refunded_vouchers', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['refunded_vouchers']) < 1)) {
            $invalidProperties[] = "invalid value for 'refunded_vouchers', number of items must be greater than or equal to 1.";
        }

        if ($this->container['not_refunded_vouchers'] === null) {
            $invalidProperties[] = "'not_refunded_vouchers' can't be null";
        }
        if ((count($this->container['not_refunded_vouchers']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'not_refunded_vouchers', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['not_refunded_vouchers']) < 1)) {
            $invalidProperties[] = "invalid value for 'not_refunded_vouchers', number of items must be greater than or equal to 1.";
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
     * Gets retoure_transaction_id
     *
     * @return int|null
     */
    public function getRetoureTransactionId(): ?int
    {
        return $this->container['retoure_transaction_id'];
    }

    /**
     * Sets retoure_transaction_id
     *
     * @param int|null $retoure_transaction_id The transaction number for the refund.
     *
     * @return $this
     */
    public function setRetoureTransactionId(?int $retoure_transaction_id): static
    {
        if (is_null($retoure_transaction_id)) {
            throw new InvalidArgumentException('non-nullable retoure_transaction_id cannot be null');
        }
        $this->container['retoure_transaction_id'] = $retoure_transaction_id;

        return $this;
    }

    /**
     * Gets shop_retoure_id
     *
     * @return string
     */
    public function getShopRetoureId(): string
    {
        return $this->container['shop_retoure_id'];
    }

    /**
     * Sets shop_retoure_id
     *
     * @param string $shop_retoure_id The id to be assigned by the shop for the refund.
     *
     * @return $this
     */
    public function setShopRetoureId(string $shop_retoure_id): static
    {
        if (is_null($shop_retoure_id)) {
            throw new InvalidArgumentException('non-nullable shop_retoure_id cannot be null');
        }
        $this->container['shop_retoure_id'] = $shop_retoure_id;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int|null $total_count The number of stamps processed with this refund transaction.
     *
     * @return $this
     */
    public function setTotalCount(?int $total_count): static
    {
        if (is_null($total_count)) {
            throw new InvalidArgumentException('non-nullable total_count cannot be null');
        }
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets count_still_open
     *
     * @return int|null
     */
    public function getCountStillOpen(): ?int
    {
        return $this->container['count_still_open'];
    }

    /**
     * Sets count_still_open
     *
     * @param int|null $count_still_open The number of stamps not yet processed. ZINS feedback has not arrived here yet.
     *
     * @return $this
     */
    public function setCountStillOpen(?int $count_still_open): static
    {
        if (is_null($count_still_open)) {
            throw new InvalidArgumentException('non-nullable count_still_open cannot be null');
        }
        $this->container['count_still_open'] = $count_still_open;

        return $this;
    }

    /**
     * Gets retoure_price
     *
     * @return int|null
     */
    public function getRetourePrice(): ?int
    {
        return $this->container['retoure_price'];
    }

    /**
     * Sets retoure_price
     *
     * @param int|null $retoure_price The total value of confirmed refunds.
     *
     * @return $this
     */
    public function setRetourePrice(?int $retoure_price): static
    {
        if (is_null($retoure_price)) {
            throw new InvalidArgumentException('non-nullable retoure_price cannot be null');
        }
        $this->container['retoure_price'] = $retoure_price;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date The timestamp when the refund was created.
     *
     * @return $this
     */
    public function setCreationDate(string $creation_date): static
    {
        if (is_null($creation_date)) {
            throw new InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets serialnumber
     *
     * @return string
     */
    public function getSerialnumber(): string
    {
        return $this->container['serialnumber'];
    }

    /**
     * Sets serialnumber
     *
     * @param string $serialnumber The serial number of the Safebox (FrankierAccountId).
     *
     * @return $this
     */
    public function setSerialnumber(string $serialnumber): static
    {
        if (is_null($serialnumber)) {
            throw new InvalidArgumentException('non-nullable serialnumber cannot be null');
        }

        if ((!preg_match("/^\\S{10}$/", ObjectSerializer::toString($serialnumber)))) {
            throw new InvalidArgumentException("invalid value for \$serialnumber when calling RetoureState., must conform to the pattern /^\\S{10}$/.");
        }

        $this->container['serialnumber'] = $serialnumber;

        return $this;
    }

    /**
     * Gets refunded_vouchers
     *
     * @return \kruegge82\DPIM\Model\Voucher[]
     */
    public function getRefundedVouchers(): array
    {
        return $this->container['refunded_vouchers'];
    }

    /**
     * Sets refunded_vouchers
     *
     * @param \kruegge82\DPIM\Model\Voucher[] $refunded_vouchers The list of created franking IDs.
     *
     * @return $this
     */
    public function setRefundedVouchers(array $refunded_vouchers): static
    {
        if (is_null($refunded_vouchers)) {
            throw new InvalidArgumentException('non-nullable refunded_vouchers cannot be null');
        }

        if ((count($refunded_vouchers) > 2147483647)) {
            throw new InvalidArgumentException('invalid value for $refunded_vouchers when calling RetoureState., number of items must be less than or equal to 2147483647.');
        }
        if ((count($refunded_vouchers) < 1)) {
            throw new InvalidArgumentException('invalid length for $refunded_vouchers when calling RetoureState., number of items must be greater than or equal to 1.');
        }
        $this->container['refunded_vouchers'] = $refunded_vouchers;

        return $this;
    }

    /**
     * Gets not_refunded_vouchers
     *
     * @return \kruegge82\DPIM\Model\Voucher[]
     */
    public function getNotRefundedVouchers(): array
    {
        return $this->container['not_refunded_vouchers'];
    }

    /**
     * Sets not_refunded_vouchers
     *
     * @param \kruegge82\DPIM\Model\Voucher[] $not_refunded_vouchers The list of created franking IDs.
     *
     * @return $this
     */
    public function setNotRefundedVouchers(array $not_refunded_vouchers): static
    {
        if (is_null($not_refunded_vouchers)) {
            throw new InvalidArgumentException('non-nullable not_refunded_vouchers cannot be null');
        }

        if ((count($not_refunded_vouchers) > 2147483647)) {
            throw new InvalidArgumentException('invalid value for $not_refunded_vouchers when calling RetoureState., number of items must be less than or equal to 2147483647.');
        }
        if ((count($not_refunded_vouchers) < 1)) {
            throw new InvalidArgumentException('invalid length for $not_refunded_vouchers when calling RetoureState., number of items must be greater than or equal to 1.');
        }
        $this->container['not_refunded_vouchers'] = $not_refunded_vouchers;

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


