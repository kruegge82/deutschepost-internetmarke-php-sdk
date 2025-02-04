<?php
/**
 * CheckoutShoppingCartPDFAppRequest
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
 * CheckoutShoppingCartPDFAppRequest Class Doc Comment
 *
 * @description The request body structure can be of different types. The type of the request has to be provided by specifying the filed &#39;type&#39; of the body.
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CheckoutShoppingCartPDFAppRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'checkoutShoppingCartPDFApp_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'product_code' => 'int',
        'image_id' => 'int',
        'voucher_layout' => 'string',
        'page_format_id' => 'int',
        'dpi' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'product_code' => 'int32',
        'image_id' => 'int32',
        'voucher_layout' => null,
        'page_format_id' => 'int32',
        'dpi' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => false,
        'product_code' => false,
        'image_id' => false,
        'voucher_layout' => false,
        'page_format_id' => false,
        'dpi' => false
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
        'type' => 'type',
        'product_code' => 'productCode',
        'image_id' => 'imageID',
        'voucher_layout' => 'voucherLayout',
        'page_format_id' => 'pageFormatId',
        'dpi' => 'dpi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'product_code' => 'setProductCode',
        'image_id' => 'setImageId',
        'voucher_layout' => 'setVoucherLayout',
        'page_format_id' => 'setPageFormatId',
        'dpi' => 'setDpi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'product_code' => 'getProductCode',
        'image_id' => 'getImageId',
        'voucher_layout' => 'getVoucherLayout',
        'page_format_id' => 'getPageFormatId',
        'dpi' => 'getDpi'
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

    public const TYPE_APP_SHOPPING_CART_PDF_REQUEST = 'AppShoppingCartPDFRequest';
    public const TYPE_APP_SHOPPING_CART_PREVIEW_PDF_REQUEST = 'AppShoppingCartPreviewPDFRequest';
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
            self::TYPE_APP_SHOPPING_CART_PDF_REQUEST,
            self::TYPE_APP_SHOPPING_CART_PREVIEW_PDF_REQUEST,
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
        $this->setIfExists('type', $data ?? [], 'AppShoppingCartPreviewPDFRequest');
        $this->setIfExists('product_code', $data ?? [], null);
        $this->setIfExists('image_id', $data ?? [], null);
        $this->setIfExists('voucher_layout', $data ?? [], null);
        $this->setIfExists('page_format_id', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
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

        if (!is_null($this->container['page_format_id']) && ($this->container['page_format_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'page_format_id', must be bigger than or equal to 1.";
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
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
     * @param string $type set AppShoppingCartPDFRequest if validate=false, AppShoppingCartPreviewPDFRequest if validate=true
     *
     * @return $this
     */
    public function setType(string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
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
    public function getProductCode(): ?int
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param int|null $product_code The product code for the selected product, e.g. standard letter, maxi letter etc. The product code must be greater than 0 and the product must be available in the third-party application.
     *
     * @return $this
     */
    public function setProductCode(?int $product_code): static
    {
        if (is_null($product_code)) {
            throw new InvalidArgumentException('non-nullable product_code cannot be null');
        }

        if (($product_code < 1)) {
            throw new InvalidArgumentException('invalid value for $product_code when calling CheckoutShoppingCartPDFAppRequest., must be bigger than or equal to 1.');
        }

        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return int|null
     */
    public function getImageId(): ?int
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param int|null $image_id The ID of the motif.
     *
     * @return $this
     */
    public function setImageId(?int $image_id): static
    {
        if (is_null($image_id)) {
            throw new InvalidArgumentException('non-nullable image_id cannot be null');
        }
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets voucher_layout
     *
     * @return string
     */
    public function getVoucherLayout(): string
    {
        return $this->container['voucher_layout'];
    }

    /**
     * Sets voucher_layout
     *
     * @param string $voucher_layout voucher_layout
     *
     * @return $this
     */
    public function setVoucherLayout(string $voucher_layout): static
    {
        if (is_null($voucher_layout)) {
            throw new InvalidArgumentException('non-nullable voucher_layout cannot be null');
        }
        $allowedValues = $this->getVoucherLayoutAllowableValues();
        if (!in_array($voucher_layout, $allowedValues, true)) {
            throw new InvalidArgumentException(
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
     * Gets page_format_id
     *
     * @return int|null
     */
    public function getPageFormatId(): ?int
    {
        return $this->container['page_format_id'];
    }

    /**
     * Sets page_format_id
     *
     * @param int|null $page_format_id The ID of the print format. All available formats can be identified by request /app/catalog?types=PAGE_FORMATS
     *
     * @return $this
     */
    public function setPageFormatId(?int $page_format_id): static
    {
        if (is_null($page_format_id)) {
            throw new InvalidArgumentException('non-nullable page_format_id cannot be null');
        }

        if (($page_format_id < 1)) {
            throw new InvalidArgumentException('invalid value for $page_format_id when calling CheckoutShoppingCartPDFAppRequest., must be bigger than or equal to 1.');
        }

        $this->container['page_format_id'] = $page_format_id;

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


