<?php
/**
 * Authentication200Response
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
 * Authentication200Response Class Doc Comment
 *
 * @package  kruegge82\DPIM
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Authentication200Response implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Authentication200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'access_token' => 'string',
        'wallet_balance' => 'int',
        'info_message' => 'string',
        'token_type' => 'string',
        'expires_in' => 'int',
        'issued_at' => 'string',
        'external_customer_id' => 'string',
        'autenticated_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'access_token' => null,
        'wallet_balance' => null,
        'info_message' => null,
        'token_type' => null,
        'expires_in' => null,
        'issued_at' => null,
        'external_customer_id' => null,
        'autenticated_user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'access_token' => false,
        'wallet_balance' => false,
        'info_message' => false,
        'token_type' => false,
        'expires_in' => false,
        'issued_at' => false,
        'external_customer_id' => false,
        'autenticated_user' => false
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
        'access_token' => 'access_token',
        'wallet_balance' => 'walletBalance',
        'info_message' => 'infoMessage',
        'token_type' => 'tokenType',
        'expires_in' => 'expires_in',
        'issued_at' => 'issued_at',
        'external_customer_id' => 'external_customer_id',
        'autenticated_user' => 'autenticated_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'access_token' => 'setAccessToken',
        'wallet_balance' => 'setWalletBalance',
        'info_message' => 'setInfoMessage',
        'token_type' => 'setTokenType',
        'expires_in' => 'setExpiresIn',
        'issued_at' => 'setIssuedAt',
        'external_customer_id' => 'setExternalCustomerId',
        'autenticated_user' => 'setAutenticatedUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'access_token' => 'getAccessToken',
        'wallet_balance' => 'getWalletBalance',
        'info_message' => 'getInfoMessage',
        'token_type' => 'getTokenType',
        'expires_in' => 'getExpiresIn',
        'issued_at' => 'getIssuedAt',
        'external_customer_id' => 'getExternalCustomerId',
        'autenticated_user' => 'getAutenticatedUser'
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
        $this->setIfExists('access_token', $data ?? [], null);
        $this->setIfExists('wallet_balance', $data ?? [], null);
        $this->setIfExists('info_message', $data ?? [], null);
        $this->setIfExists('token_type', $data ?? [], null);
        $this->setIfExists('expires_in', $data ?? [], null);
        $this->setIfExists('issued_at', $data ?? [], null);
        $this->setIfExists('external_customer_id', $data ?? [], null);
        $this->setIfExists('autenticated_user', $data ?? [], null);
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

        if (!is_null($this->container['issued_at']) && !preg_match("/^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/", $this->container['issued_at'])) {
            $invalidProperties[] = "invalid value for 'issued_at', must be conform to the pattern /^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/.";
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
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token The access token / bearer token
     *
     * @return $this
     */
    public function setAccessToken(?string $access_token): static
    {
        if (is_null($access_token)) {
            throw new InvalidArgumentException('non-nullable access_token cannot be null');
        }
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets wallet_balance
     *
     * @return int|null
     */
    public function getWalletBalance(): ?int
    {
        return $this->container['wallet_balance'];
    }

    /**
     * Sets wallet_balance
     *
     * @param int|null $wallet_balance money balance in portokasse
     *
     * @return $this
     */
    public function setWalletBalance(?int $wallet_balance): static
    {
        if (is_null($wallet_balance)) {
            throw new InvalidArgumentException('non-nullable wallet_balance cannot be null');
        }
        $this->container['wallet_balance'] = $wallet_balance;

        return $this;
    }

    /**
     * Gets info_message
     *
     * @return string|null
     */
    public function getInfoMessage(): ?string
    {
        return $this->container['info_message'];
    }

    /**
     * Sets info_message
     *
     * @param string|null $info_message info message, if any
     *
     * @return $this
     */
    public function setInfoMessage(?string $info_message): static
    {
        if (is_null($info_message)) {
            throw new InvalidArgumentException('non-nullable info_message cannot be null');
        }
        $this->container['info_message'] = $info_message;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type Will always contain 'BearerToken'
     *
     * @return $this
     */
    public function setTokenType(?string $token_type): static
    {
        if (is_null($token_type)) {
            throw new InvalidArgumentException('non-nullable token_type cannot be null');
        }
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int|null
     */
    public function getExpiresIn(): ?int
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int|null $expires_in remaining token validity in seconds
     *
     * @return $this
     */
    public function setExpiresIn(?int $expires_in): static
    {
        if (is_null($expires_in)) {
            throw new InvalidArgumentException('non-nullable expires_in cannot be null');
        }
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets issued_at
     *
     * @return string|null
     */
    public function getIssuedAt(): ?string
    {
        return $this->container['issued_at'];
    }

    /**
     * Sets issued_at
     *
     * @param string|null $issued_at Time when token was issued
     *
     * @return $this
     */
    public function setIssuedAt(?string $issued_at): static
    {
        if (is_null($issued_at)) {
            throw new InvalidArgumentException('non-nullable issued_at cannot be null');
        }

        if ((!preg_match("/^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/", ObjectSerializer::toString($issued_at)))) {
            throw new InvalidArgumentException("invalid value for \$issued_at when calling Authentication200Response., must conform to the pattern /^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/.");
        }

        $this->container['issued_at'] = $issued_at;

        return $this;
    }

    /**
     * Gets external_customer_id
     *
     * @return string|null
     */
    public function getExternalCustomerId(): ?string
    {
        return $this->container['external_customer_id'];
    }

    /**
     * Sets external_customer_id
     *
     * @param string|null $external_customer_id Matches the user requesting the token, used internally
     *
     * @return $this
     */
    public function setExternalCustomerId(?string $external_customer_id): static
    {
        if (is_null($external_customer_id)) {
            throw new InvalidArgumentException('non-nullable external_customer_id cannot be null');
        }
        $this->container['external_customer_id'] = $external_customer_id;

        return $this;
    }

    /**
     * Gets autenticated_user
     *
     * @return string|null
     */
    public function getAutenticatedUser(): ?string
    {
        return $this->container['autenticated_user'];
    }

    /**
     * Sets autenticated_user
     *
     * @param string|null $autenticated_user user requesting the token
     *
     * @return $this
     */
    public function setAutenticatedUser(?string $autenticated_user): static
    {
        if (is_null($autenticated_user)) {
            throw new InvalidArgumentException('non-nullable autenticated_user cannot be null');
        }
        $this->container['autenticated_user'] = $autenticated_user;

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


