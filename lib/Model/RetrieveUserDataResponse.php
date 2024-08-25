<?php
/**
 * RetrieveUserDataResponse
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
 * RetrieveUserDataResponse Class Doc Comment
 *
 * @category Class
 * @description The response object for the retrieving the user&#39;s data by shop.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RetrieveUserDataResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetrieveUserDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ekp' => 'string',
        'company' => 'string',
        'salutation' => 'string',
        'title' => 'string',
        'invoice_type' => 'string',
        'invoice_frequency' => 'string',
        'mail' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'street' => 'string',
        'house_no' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'pobox' => 'string',
        'pobox_zip' => 'string',
        'pobox_city' => 'string',
        'epostbrief' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ekp' => null,
        'company' => null,
        'salutation' => null,
        'title' => null,
        'invoice_type' => null,
        'invoice_frequency' => null,
        'mail' => null,
        'firstname' => null,
        'lastname' => null,
        'street' => null,
        'house_no' => null,
        'zip' => null,
        'city' => null,
        'country' => null,
        'phone' => null,
        'pobox' => null,
        'pobox_zip' => null,
        'pobox_city' => null,
        'epostbrief' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ekp' => false,
        'company' => false,
        'salutation' => false,
        'title' => false,
        'invoice_type' => false,
        'invoice_frequency' => false,
        'mail' => false,
        'firstname' => false,
        'lastname' => false,
        'street' => false,
        'house_no' => false,
        'zip' => false,
        'city' => false,
        'country' => false,
        'phone' => false,
        'pobox' => false,
        'pobox_zip' => false,
        'pobox_city' => false,
        'epostbrief' => false
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
        'ekp' => 'ekp',
        'company' => 'company',
        'salutation' => 'salutation',
        'title' => 'title',
        'invoice_type' => 'invoiceType',
        'invoice_frequency' => 'invoiceFrequency',
        'mail' => 'mail',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'street' => 'street',
        'house_no' => 'houseNo',
        'zip' => 'zip',
        'city' => 'city',
        'country' => 'country',
        'phone' => 'phone',
        'pobox' => 'pobox',
        'pobox_zip' => 'poboxZip',
        'pobox_city' => 'poboxCity',
        'epostbrief' => 'epostbrief'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ekp' => 'setEkp',
        'company' => 'setCompany',
        'salutation' => 'setSalutation',
        'title' => 'setTitle',
        'invoice_type' => 'setInvoiceType',
        'invoice_frequency' => 'setInvoiceFrequency',
        'mail' => 'setMail',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'street' => 'setStreet',
        'house_no' => 'setHouseNo',
        'zip' => 'setZip',
        'city' => 'setCity',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'pobox' => 'setPobox',
        'pobox_zip' => 'setPoboxZip',
        'pobox_city' => 'setPoboxCity',
        'epostbrief' => 'setEpostbrief'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ekp' => 'getEkp',
        'company' => 'getCompany',
        'salutation' => 'getSalutation',
        'title' => 'getTitle',
        'invoice_type' => 'getInvoiceType',
        'invoice_frequency' => 'getInvoiceFrequency',
        'mail' => 'getMail',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'street' => 'getStreet',
        'house_no' => 'getHouseNo',
        'zip' => 'getZip',
        'city' => 'getCity',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'pobox' => 'getPobox',
        'pobox_zip' => 'getPoboxZip',
        'pobox_city' => 'getPoboxCity',
        'epostbrief' => 'getEpostbrief'
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

    public const INVOICE_TYPE_NO = 'NO';
    public const INVOICE_TYPE_PAPER = 'PAPER';
    public const INVOICE_TYPE_ONLINE = 'ONLINE';
    public const INVOICE_TYPE_EPOST = 'EPOST';
    public const INVOICE_FREQUENCY_DECADE = 'DECADE';
    public const INVOICE_FREQUENCY_DAILY = 'DAILY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_NO,
            self::INVOICE_TYPE_PAPER,
            self::INVOICE_TYPE_ONLINE,
            self::INVOICE_TYPE_EPOST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceFrequencyAllowableValues()
    {
        return [
            self::INVOICE_FREQUENCY_DECADE,
            self::INVOICE_FREQUENCY_DAILY,
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
        $this->setIfExists('ekp', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('invoice_type', $data ?? [], null);
        $this->setIfExists('invoice_frequency', $data ?? [], null);
        $this->setIfExists('mail', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('house_no', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('pobox', $data ?? [], null);
        $this->setIfExists('pobox_zip', $data ?? [], null);
        $this->setIfExists('pobox_city', $data ?? [], null);
        $this->setIfExists('epostbrief', $data ?? [], null);
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

        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoice_type']) && !in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invoice_type', must be one of '%s'",
                $this->container['invoice_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice_frequency'] === null) {
            $invalidProperties[] = "'invoice_frequency' can't be null";
        }
        $allowedValues = $this->getInvoiceFrequencyAllowableValues();
        if (!is_null($this->container['invoice_frequency']) && !in_array($this->container['invoice_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invoice_frequency', must be one of '%s'",
                $this->container['invoice_frequency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['mail'] === null) {
            $invalidProperties[] = "'mail' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets ekp
     *
     * @return string|null
     */
    public function getEkp()
    {
        return $this->container['ekp'];
    }

    /**
     * Sets ekp
     *
     * @param string|null $ekp The EKP of the customer.
     *
     * @return self
     */
    public function setEkp($ekp)
    {
        if (is_null($ekp)) {
            throw new \InvalidArgumentException('non-nullable ekp cannot be null');
        }
        $this->container['ekp'] = $ekp;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company The company name of the customer.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation The salutation of the customer.
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the customer.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type The invoice type.
     *
     * @return self
     */
    public function setInvoiceType($invoice_type)
    {
        if (is_null($invoice_type)) {
            throw new \InvalidArgumentException('non-nullable invoice_type cannot be null');
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'invoice_type', must be one of '%s'",
                    $invoice_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets invoice_frequency
     *
     * @return string
     */
    public function getInvoiceFrequency()
    {
        return $this->container['invoice_frequency'];
    }

    /**
     * Sets invoice_frequency
     *
     * @param string $invoice_frequency The billing interval.
     *
     * @return self
     */
    public function setInvoiceFrequency($invoice_frequency)
    {
        if (is_null($invoice_frequency)) {
            throw new \InvalidArgumentException('non-nullable invoice_frequency cannot be null');
        }
        $allowedValues = $this->getInvoiceFrequencyAllowableValues();
        if (!in_array($invoice_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'invoice_frequency', must be one of '%s'",
                    $invoice_frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_frequency'] = $invoice_frequency;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param string $mail The E-Mail address of the customer.
     *
     * @return self
     */
    public function setMail($mail)
    {
        if (is_null($mail)) {
            throw new \InvalidArgumentException('non-nullable mail cannot be null');
        }
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname The firstname of the customer.
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname The lastname of the customer.
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street The street of the customer.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house_no
     *
     * @return string|null
     */
    public function getHouseNo()
    {
        return $this->container['house_no'];
    }

    /**
     * Sets house_no
     *
     * @param string|null $house_no The house number of the customer.
     *
     * @return self
     */
    public function setHouseNo($house_no)
    {
        if (is_null($house_no)) {
            throw new \InvalidArgumentException('non-nullable house_no cannot be null');
        }
        $this->container['house_no'] = $house_no;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip The zip of the customer.
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the customer.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
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
     * @param string $country The country of the customer.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The telephone number of the customer.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets pobox
     *
     * @return string|null
     */
    public function getPobox()
    {
        return $this->container['pobox'];
    }

    /**
     * Sets pobox
     *
     * @param string|null $pobox The postbox of the customer.
     *
     * @return self
     */
    public function setPobox($pobox)
    {
        if (is_null($pobox)) {
            throw new \InvalidArgumentException('non-nullable pobox cannot be null');
        }
        $this->container['pobox'] = $pobox;

        return $this;
    }

    /**
     * Gets pobox_zip
     *
     * @return string|null
     */
    public function getPoboxZip()
    {
        return $this->container['pobox_zip'];
    }

    /**
     * Sets pobox_zip
     *
     * @param string|null $pobox_zip The postbox zip of the customer.
     *
     * @return self
     */
    public function setPoboxZip($pobox_zip)
    {
        if (is_null($pobox_zip)) {
            throw new \InvalidArgumentException('non-nullable pobox_zip cannot be null');
        }
        $this->container['pobox_zip'] = $pobox_zip;

        return $this;
    }

    /**
     * Gets pobox_city
     *
     * @return string|null
     */
    public function getPoboxCity()
    {
        return $this->container['pobox_city'];
    }

    /**
     * Sets pobox_city
     *
     * @param string|null $pobox_city The postbox city of the customer.
     *
     * @return self
     */
    public function setPoboxCity($pobox_city)
    {
        if (is_null($pobox_city)) {
            throw new \InvalidArgumentException('non-nullable pobox_city cannot be null');
        }
        $this->container['pobox_city'] = $pobox_city;

        return $this;
    }

    /**
     * Gets epostbrief
     *
     * @return string|null
     */
    public function getEpostbrief()
    {
        return $this->container['epostbrief'];
    }

    /**
     * Sets epostbrief
     *
     * @param string|null $epostbrief epostbrief
     *
     * @return self
     */
    public function setEpostbrief($epostbrief)
    {
        if (is_null($epostbrief)) {
            throw new \InvalidArgumentException('non-nullable epostbrief cannot be null');
        }
        $this->container['epostbrief'] = $epostbrief;

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

