<?php
/**
 * AppShoppingCartPNGRequest
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
 * The version of the OpenAPI document: 1.25
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DPIM\Model;

/**
 * AppShoppingCartPNGRequest Class Doc Comment
 *
 * @description The request object for external partners to buy an internet stamp in PNG format.
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AppShoppingCartPNGRequest extends AppCheckoutPNGRequest
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AppShoppingCartPNGRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'shop_order_id' => 'string',
        'total' => 'int',
        'create_manifest' => 'bool',
        'create_shipping_list' => 'string',
        'dpi' => 'string',
        'optimize_png' => 'bool',
        'positions' => '\kruegge82\DPIM\Model\AppShoppingCartPosition[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shop_order_id' => null,
        'total' => 'int32',
        'create_manifest' => null,
        'create_shipping_list' => null,
        'dpi' => null,
        'optimize_png' => null,
        'positions' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'shop_order_id' => false,
        'total' => false,
        'create_manifest' => false,
        'create_shipping_list' => false,
        'dpi' => false,
        'optimize_png' => false,
        'positions' => false,
        'type' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'shop_order_id' => 'shopOrderId',
        'total' => 'total',
        'create_manifest' => 'createManifest',
        'create_shipping_list' => 'createShippingList',
        'dpi' => 'dpi',
        'optimize_png' => 'optimizePNG',
        'positions' => 'positions',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'shop_order_id' => 'setShopOrderId',
        'total' => 'setTotal',
        'create_manifest' => 'setCreateManifest',
        'create_shipping_list' => 'setCreateShippingList',
        'dpi' => 'setDpi',
        'optimize_png' => 'setOptimizePng',
        'positions' => 'setPositions',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'shop_order_id' => 'getShopOrderId',
        'total' => 'getTotal',
        'create_manifest' => 'getCreateManifest',
        'create_shipping_list' => 'getCreateShippingList',
        'dpi' => 'getDpi',
        'optimize_png' => 'getOptimizePng',
        'positions' => 'getPositions',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return parent::getters() + self::$getters;
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

    public const DPI_DPI300 = 'DPI300';
    public const DPI_DPI203 = 'DPI203';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDpiAllowableValues()
    {
        return [
            self::DPI_DPI300,
            self::DPI_DPI203,
        ];
    }


    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('shop_order_id', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('create_manifest', $data ?? [], null);
        $this->setIfExists('create_shipping_list', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
        $this->setIfExists('optimize_png', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
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
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['shop_order_id']) && (mb_strlen($this->container['shop_order_id']) > 18)) {
            $invalidProperties[] = "invalid value for 'shop_order_id', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['shop_order_id']) && (mb_strlen($this->container['shop_order_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'shop_order_id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getDpiAllowableValues();
        if (!is_null($this->container['dpi']) && !in_array($this->container['dpi'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dpi', must be one of '%s'",
                $this->container['dpi'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['positions'] === null) {
            $invalidProperties[] = "'positions' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets shop_order_id
     *
     * @return string|null
     */
    public function getShopOrderId(): ?string
    {
        return $this->container['shop_order_id'];
    }

    /**
     * Sets shop_order_id
     *
     * @param string|null $shop_order_id The order number in the shop. All characters are allowed except < and &. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required.
     *
     * @return $this
     */
    public function setShopOrderId(?string $shop_order_id): static
    {
        if (is_null($shop_order_id)) {
            throw new InvalidArgumentException('non-nullable shop_order_id cannot be null');
        }
        if ((mb_strlen($shop_order_id) > 18)) {
            throw new InvalidArgumentException('invalid length for $shop_order_id when calling AppShoppingCartPNGRequest., must be smaller than or equal to 18.');
        }
        if ((mb_strlen($shop_order_id) < 1)) {
            throw new InvalidArgumentException('invalid length for $shop_order_id when calling AppShoppingCartPNGRequest., must be bigger than or equal to 1.');
        }

        $this->container['shop_order_id'] = $shop_order_id;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total value of the shopping cart in euro cents.
     *
     * @return $this
     */
    public function setTotal(?int $total): static
    {
        if (is_null($total)) {
            throw new InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets create_manifest
     *
     * @return bool|null
     */
    public function getCreateManifest(): ?bool
    {
        return $this->container['create_manifest'];
    }

    /**
     * Sets create_manifest
     *
     * @param bool|null $create_manifest The flag indicating whether a posting receipt should be created.
     *
     * @return $this
     */
    public function setCreateManifest(?bool $create_manifest): static
    {
        if (is_null($create_manifest)) {
            throw new InvalidArgumentException('non-nullable create_manifest cannot be null');
        }
        $this->container['create_manifest'] = $create_manifest;

        return $this;
    }

    /**
     * Gets create_shipping_list
     *
     * @return string|null
     */
    public function getCreateShippingList(): ?string
    {
        return $this->container['create_shipping_list'];
    }

    /**
     * Sets create_shipping_list
     *
     * @param string|null $create_shipping_list Enum that determines whether a mailing list should be created and if so, whether with or without addresses.
     *
     * @return $this
     */
    public function setCreateShippingList(?string $create_shipping_list): static
    {
        if (is_null($create_shipping_list)) {
            throw new InvalidArgumentException('non-nullable create_shipping_list cannot be null');
        }
        $this->container['create_shipping_list'] = $create_shipping_list;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return string|null
     */
    public function getDpi(): ?string
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param string|null $dpi dpi
     *
     * @return $this
     */
    public function setDpi(?string $dpi): static
    {
        if (is_null($dpi)) {
            throw new InvalidArgumentException('non-nullable dpi cannot be null');
        }
        $allowedValues = $this->getDpiAllowableValues();
        if (!in_array($dpi, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dpi', must be one of '%s'",
                    $dpi,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets optimize_png
     *
     * @return bool|null
     */
    public function getOptimizePng(): ?bool
    {
        return $this->container['optimize_png'];
    }

    /**
     * Sets optimize_png
     *
     * @param bool|null $optimize_png The flag to optimize the PNG (avoid redundant area height).
     *
     * @return $this
     */
    public function setOptimizePng(?bool $optimize_png): static
    {
        if (is_null($optimize_png)) {
            throw new InvalidArgumentException('non-nullable optimize_png cannot be null');
        }
        $this->container['optimize_png'] = $optimize_png;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \kruegge82\DPIM\Model\AppShoppingCartPosition[]
     */
    public function getPositions(): array
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \kruegge82\DPIM\Model\AppShoppingCartPosition[] $positions List of PNG order items. At least one item has to be specified.
     *
     * @return $this
     */
    public function setPositions(array $positions): static
    {
        if (is_null($positions)) {
            throw new InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'] = $positions;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType(string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


