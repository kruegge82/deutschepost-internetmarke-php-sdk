<?php
/**
 * Address
 *
 * PHP version 7.4
 *
 * @category Class
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
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DPIM\Model;

use \ArrayAccess;
use \kruegge82\DPIM\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'additional_name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'additional_name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'postal_code' => null,
        'city' => null,
        'country' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'additional_name' => false,
        'address_line1' => false,
        'address_line2' => false,
        'postal_code' => false,
        'city' => false,
        'country' => false
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
        'name' => 'name',
        'additional_name' => 'additionalName',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'postal_code' => 'postalCode',
        'city' => 'city',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'additional_name' => 'setAdditionalName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'additional_name' => 'getAdditionalName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'country' => 'getCountry'
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


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('additional_name', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['additional_name']) && (mb_strlen($this->container['additional_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'additional_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['additional_name']) && (mb_strlen($this->container['additional_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'additional_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ((mb_strlen($this->container['address_line1']) > 50)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['address_line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['postal_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", $this->container['postal_code'])) {
            $invalidProperties[] = "invalid value for 'postal_code', must be conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 40)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 3)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['country']) < 3)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 3.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name information (firstname lastname)
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets additional_name
     *
     * @return string|null
     */
    public function getAdditionalName()
    {
        return $this->container['additional_name'];
    }

    /**
     * Sets additional_name
     *
     * @param string|null $additional_name The additional name information (i. e. company name)
     *
     * @return self
     */
    public function setAdditionalName($additional_name)
    {
        if (is_null($additional_name)) {
            throw new \InvalidArgumentException('non-nullable additional_name cannot be null');
        }
        if ((mb_strlen($additional_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $additional_name when calling Address., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($additional_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $additional_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['additional_name'] = $additional_name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 This is the first line of the address. Usually street name and house number.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            throw new \InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        if ((mb_strlen($address_line1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($address_line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Line 2 of the street address. Most of the time this is not needed and not printed to most labels.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            throw new \InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        if ((mb_strlen($address_line2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($address_line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Mandatory for all countries that use a postal code system.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postal_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", ObjectSerializer::toString($postal_code)))) {
            throw new \InvalidArgumentException("invalid value for \$postal_code when calling Address., must conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.");
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The name of the city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The iso 3 code of the country.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($country) < 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be bigger than or equal to 3.');
        }

        $this->container['country'] = $country;

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


