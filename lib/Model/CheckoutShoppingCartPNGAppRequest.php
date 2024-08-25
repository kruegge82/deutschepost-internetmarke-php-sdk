<?php
/**
 * CheckoutShoppingCartPNGAppRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deutsche Post INTERNETMARKE API
 *
 * Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.
 *
 * The version of the OpenAPI document: 1.25
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CheckoutShoppingCartPNGAppRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutShoppingCartPNGAppRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'checkoutShoppingCartPNGApp_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'product_code' => 'int',
        'image_id' => 'int',
        'voucher_layout' => 'string',
        'dpi' => 'string',
        'optimize_png' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'product_code' => 'int32',
        'image_id' => 'int32',
        'voucher_layout' => null,
        'dpi' => null,
        'optimize_png' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'product_code' => false,
        'image_id' => false,
        'voucher_layout' => false,
        'dpi' => false,
        'optimize_png' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'product_code' => 'productCode',
        'image_id' => 'imageID',
        'voucher_layout' => 'voucherLayout',
        'dpi' => 'dpi',
        'optimize_png' => 'optimizePNG'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'product_code' => 'setProductCode',
        'image_id' => 'setImageId',
        'voucher_layout' => 'setVoucherLayout',
        'dpi' => 'setDpi',
        'optimize_png' => 'setOptimizePng'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'product_code' => 'getProductCode',
        'image_id' => 'getImageId',
        'voucher_layout' => 'getVoucherLayout',
        'dpi' => 'getDpi',
        'optimize_png' => 'getOptimizePng'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TYPE_APP_SHOPPING_CART_PNG_REQUEST = 'AppShoppingCartPNGRequest';
    public const TYPE_APP_SHOPPING_CART_PREVIEW_PNG_REQUEST = 'AppShoppingCartPreviewPNGRequest';
    public const VOUCHER_LAYOUT_ADDRESS_ZONE = 'ADDRESS_ZONE';
    public const VOUCHER_LAYOUT_FRANKING_ZONE = 'FRANKING_ZONE';
    public const DPI_DPI300 = 'DPI300';
    public const DPI_DPI203 = 'DPI203';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_APP_SHOPPING_CART_PNG_REQUEST,
            self::TYPE_APP_SHOPPING_CART_PREVIEW_PNG_REQUEST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherLayoutAllowableValues()
    {
        return [
            self::VOUCHER_LAYOUT_ADDRESS_ZONE,
            self::VOUCHER_LAYOUT_FRANKING_ZONE,
        ];
    }

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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('type', $data ?? [], 'AppShoppingCartPNGRequest');
        $this->setIfExists('product_code', $data ?? [], null);
        $this->setIfExists('image_id', $data ?? [], null);
        $this->setIfExists('voucher_layout', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
        $this->setIfExists('optimize_png', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['product_code']) && ($this->container['product_code'] < 1)) {
            $invalidProperties[] = "invalid value for 'product_code', must be bigger than or equal to 1.";
        }

        if ($this->container['voucher_layout'] === null) {
            $invalidProperties[] = "'voucher_layout' can't be null";
        }
        $allowedValues = $this->getVoucherLayoutAllowableValues();
        if (!is_null($this->container['voucher_layout']) && !in_array($this->container['voucher_layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voucher_layout', must be one of '%s'",
                $this->container['voucher_layout'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDpiAllowableValues();
        if (!is_null($this->container['dpi']) && !in_array($this->container['dpi'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dpi', must be one of '%s'",
                $this->container['dpi'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type set AppShoppingCartPNGRequest if validate=false, AppShoppingCartPreviewPNGRequest if validate=true
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return int|null
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param int|null $product_code The product code for the selected product, e.g. standard letter, maxi letter etc. The product code must be greater than 0 and the product must be available in the third-party application.
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        if (is_null($product_code)) {
            throw new \InvalidArgumentException('non-nullable product_code cannot be null');
        }

        if (($product_code < 1)) {
            throw new \InvalidArgumentException('invalid value for $product_code when calling CheckoutShoppingCartPNGAppRequest., must be bigger than or equal to 1.');
        }

        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return int|null
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param int|null $image_id The ID of the motif.
     *
     * @return self
     */
    public function setImageId($image_id)
    {
        if (is_null($image_id)) {
            throw new \InvalidArgumentException('non-nullable image_id cannot be null');
        }
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets voucher_layout
     *
     * @return string
     */
    public function getVoucherLayout()
    {
        return $this->container['voucher_layout'];
    }

    /**
     * Sets voucher_layout
     *
     * @param string $voucher_layout voucher_layout
     *
     * @return self
     */
    public function setVoucherLayout($voucher_layout)
    {
        if (is_null($voucher_layout)) {
            throw new \InvalidArgumentException('non-nullable voucher_layout cannot be null');
        }
        $allowedValues = $this->getVoucherLayoutAllowableValues();
        if (!in_array($voucher_layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voucher_layout', must be one of '%s'",
                    $voucher_layout,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_layout'] = $voucher_layout;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return string|null
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param string|null $dpi dpi
     *
     * @return self
     */
    public function setDpi($dpi)
    {
        if (is_null($dpi)) {
            throw new \InvalidArgumentException('non-nullable dpi cannot be null');
        }
        $allowedValues = $this->getDpiAllowableValues();
        if (!in_array($dpi, $allowedValues, true)) {
            throw new \InvalidArgumentException(
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
    public function getOptimizePng()
    {
        return $this->container['optimize_png'];
    }

    /**
     * Sets optimize_png
     *
     * @param bool|null $optimize_png Flag to optimize the PNG.
     *
     * @return self
     */
    public function setOptimizePng($optimize_png)
    {
        if (is_null($optimize_png)) {
            throw new \InvalidArgumentException('non-nullable optimize_png cannot be null');
        }
        $this->container['optimize_png'] = $optimize_png;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

