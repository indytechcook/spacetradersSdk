<?php
/**
 * Ship
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SpaceTraders API
 *
 * SpaceTraders is an open-universe game and learning platform that offers a set of HTTP endpoints to control a fleet of ships and explore a multiplayer universe.  The API is documented using [OpenAPI](https://github.com/SpaceTradersAPI/api-docs). You can send your first request right here in your browser to check the status of the game server.  ```json http {   \"method\": \"GET\",   \"url\": \"https://api.spacetraders.io/v2\", } ```  Unlike a traditional game, SpaceTraders does not have a first-party client or app to play the game. Instead, you can use the API to build your own client, write a script to automate your ships, or try an app built by the community.  We have a [Discord channel](https://discord.com/invite/jh6zurdWk5) where you can share your projects, ask questions, and get help from other players.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: joel@spacetraders.io
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * Ship Class Doc Comment
 *
 * @description Ship details.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Ship implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Ship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'symbol' => 'string',
        'registration' => '\OpenAPI\Client\Model\ShipRegistration',
        'nav' => '\OpenAPI\Client\Model\ShipNav',
        'crew' => '\OpenAPI\Client\Model\ShipCrew',
        'frame' => '\OpenAPI\Client\Model\ShipFrame',
        'reactor' => '\OpenAPI\Client\Model\ShipReactor',
        'engine' => '\OpenAPI\Client\Model\ShipEngine',
        'cooldown' => '\OpenAPI\Client\Model\Cooldown',
        'modules' => '\OpenAPI\Client\Model\ShipModule[]',
        'mounts' => '\OpenAPI\Client\Model\ShipMount[]',
        'cargo' => '\OpenAPI\Client\Model\ShipCargo',
        'fuel' => '\OpenAPI\Client\Model\ShipFuel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'symbol' => null,
        'registration' => null,
        'nav' => null,
        'crew' => null,
        'frame' => null,
        'reactor' => null,
        'engine' => null,
        'cooldown' => null,
        'modules' => null,
        'mounts' => null,
        'cargo' => null,
        'fuel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'symbol' => false,
        'registration' => false,
        'nav' => false,
        'crew' => false,
        'frame' => false,
        'reactor' => false,
        'engine' => false,
        'cooldown' => false,
        'modules' => false,
        'mounts' => false,
        'cargo' => false,
        'fuel' => false
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
        'symbol' => 'symbol',
        'registration' => 'registration',
        'nav' => 'nav',
        'crew' => 'crew',
        'frame' => 'frame',
        'reactor' => 'reactor',
        'engine' => 'engine',
        'cooldown' => 'cooldown',
        'modules' => 'modules',
        'mounts' => 'mounts',
        'cargo' => 'cargo',
        'fuel' => 'fuel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'symbol' => 'setSymbol',
        'registration' => 'setRegistration',
        'nav' => 'setNav',
        'crew' => 'setCrew',
        'frame' => 'setFrame',
        'reactor' => 'setReactor',
        'engine' => 'setEngine',
        'cooldown' => 'setCooldown',
        'modules' => 'setModules',
        'mounts' => 'setMounts',
        'cargo' => 'setCargo',
        'fuel' => 'setFuel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'symbol' => 'getSymbol',
        'registration' => 'getRegistration',
        'nav' => 'getNav',
        'crew' => 'getCrew',
        'frame' => 'getFrame',
        'reactor' => 'getReactor',
        'engine' => 'getEngine',
        'cooldown' => 'getCooldown',
        'modules' => 'getModules',
        'mounts' => 'getMounts',
        'cargo' => 'getCargo',
        'fuel' => 'getFuel'
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('registration', $data ?? [], null);
        $this->setIfExists('nav', $data ?? [], null);
        $this->setIfExists('crew', $data ?? [], null);
        $this->setIfExists('frame', $data ?? [], null);
        $this->setIfExists('reactor', $data ?? [], null);
        $this->setIfExists('engine', $data ?? [], null);
        $this->setIfExists('cooldown', $data ?? [], null);
        $this->setIfExists('modules', $data ?? [], null);
        $this->setIfExists('mounts', $data ?? [], null);
        $this->setIfExists('cargo', $data ?? [], null);
        $this->setIfExists('fuel', $data ?? [], null);
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

        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['registration'] === null) {
            $invalidProperties[] = "'registration' can't be null";
        }
        if ($this->container['nav'] === null) {
            $invalidProperties[] = "'nav' can't be null";
        }
        if ($this->container['crew'] === null) {
            $invalidProperties[] = "'crew' can't be null";
        }
        if ($this->container['frame'] === null) {
            $invalidProperties[] = "'frame' can't be null";
        }
        if ($this->container['reactor'] === null) {
            $invalidProperties[] = "'reactor' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['cooldown'] === null) {
            $invalidProperties[] = "'cooldown' can't be null";
        }
        if ($this->container['modules'] === null) {
            $invalidProperties[] = "'modules' can't be null";
        }
        if ($this->container['mounts'] === null) {
            $invalidProperties[] = "'mounts' can't be null";
        }
        if ($this->container['cargo'] === null) {
            $invalidProperties[] = "'cargo' can't be null";
        }
        if ($this->container['fuel'] === null) {
            $invalidProperties[] = "'fuel' can't be null";
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
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol The globally unique identifier of the ship in the following format: `[AGENT_SYMBOL]-[HEX_ID]`
     *
     * @return $this
     */
    public function setSymbol(string $symbol): static
    {
        if (is_null($symbol)) {
            throw new InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets registration
     *
     * @return \OpenAPI\Client\Model\ShipRegistration
     */
    public function getRegistration(): \OpenAPI\Client\Model\ShipRegistration
    {
        return $this->container['registration'];
    }

    /**
     * Sets registration
     *
     * @param \OpenAPI\Client\Model\ShipRegistration $registration registration
     *
     * @return $this
     */
    public function setRegistration(\OpenAPI\Client\Model\ShipRegistration $registration): static
    {
        if (is_null($registration)) {
            throw new InvalidArgumentException('non-nullable registration cannot be null');
        }
        $this->container['registration'] = $registration;

        return $this;
    }

    /**
     * Gets nav
     *
     * @return \OpenAPI\Client\Model\ShipNav
     */
    public function getNav(): \OpenAPI\Client\Model\ShipNav
    {
        return $this->container['nav'];
    }

    /**
     * Sets nav
     *
     * @param \OpenAPI\Client\Model\ShipNav $nav nav
     *
     * @return $this
     */
    public function setNav(\OpenAPI\Client\Model\ShipNav $nav): static
    {
        if (is_null($nav)) {
            throw new InvalidArgumentException('non-nullable nav cannot be null');
        }
        $this->container['nav'] = $nav;

        return $this;
    }

    /**
     * Gets crew
     *
     * @return \OpenAPI\Client\Model\ShipCrew
     */
    public function getCrew(): \OpenAPI\Client\Model\ShipCrew
    {
        return $this->container['crew'];
    }

    /**
     * Sets crew
     *
     * @param \OpenAPI\Client\Model\ShipCrew $crew crew
     *
     * @return $this
     */
    public function setCrew(\OpenAPI\Client\Model\ShipCrew $crew): static
    {
        if (is_null($crew)) {
            throw new InvalidArgumentException('non-nullable crew cannot be null');
        }
        $this->container['crew'] = $crew;

        return $this;
    }

    /**
     * Gets frame
     *
     * @return \OpenAPI\Client\Model\ShipFrame
     */
    public function getFrame(): \OpenAPI\Client\Model\ShipFrame
    {
        return $this->container['frame'];
    }

    /**
     * Sets frame
     *
     * @param \OpenAPI\Client\Model\ShipFrame $frame frame
     *
     * @return $this
     */
    public function setFrame(\OpenAPI\Client\Model\ShipFrame $frame): static
    {
        if (is_null($frame)) {
            throw new InvalidArgumentException('non-nullable frame cannot be null');
        }
        $this->container['frame'] = $frame;

        return $this;
    }

    /**
     * Gets reactor
     *
     * @return \OpenAPI\Client\Model\ShipReactor
     */
    public function getReactor(): \OpenAPI\Client\Model\ShipReactor
    {
        return $this->container['reactor'];
    }

    /**
     * Sets reactor
     *
     * @param \OpenAPI\Client\Model\ShipReactor $reactor reactor
     *
     * @return $this
     */
    public function setReactor(\OpenAPI\Client\Model\ShipReactor $reactor): static
    {
        if (is_null($reactor)) {
            throw new InvalidArgumentException('non-nullable reactor cannot be null');
        }
        $this->container['reactor'] = $reactor;

        return $this;
    }

    /**
     * Gets engine
     *
     * @return \OpenAPI\Client\Model\ShipEngine
     */
    public function getEngine(): \OpenAPI\Client\Model\ShipEngine
    {
        return $this->container['engine'];
    }

    /**
     * Sets engine
     *
     * @param \OpenAPI\Client\Model\ShipEngine $engine engine
     *
     * @return $this
     */
    public function setEngine(\OpenAPI\Client\Model\ShipEngine $engine): static
    {
        if (is_null($engine)) {
            throw new InvalidArgumentException('non-nullable engine cannot be null');
        }
        $this->container['engine'] = $engine;

        return $this;
    }

    /**
     * Gets cooldown
     *
     * @return \OpenAPI\Client\Model\Cooldown
     */
    public function getCooldown(): \OpenAPI\Client\Model\Cooldown
    {
        return $this->container['cooldown'];
    }

    /**
     * Sets cooldown
     *
     * @param \OpenAPI\Client\Model\Cooldown $cooldown cooldown
     *
     * @return $this
     */
    public function setCooldown(\OpenAPI\Client\Model\Cooldown $cooldown): static
    {
        if (is_null($cooldown)) {
            throw new InvalidArgumentException('non-nullable cooldown cannot be null');
        }
        $this->container['cooldown'] = $cooldown;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return \OpenAPI\Client\Model\ShipModule[]
     */
    public function getModules(): array
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param \OpenAPI\Client\Model\ShipModule[] $modules Modules installed in this ship.
     *
     * @return $this
     */
    public function setModules(array $modules): static
    {
        if (is_null($modules)) {
            throw new InvalidArgumentException('non-nullable modules cannot be null');
        }
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets mounts
     *
     * @return \OpenAPI\Client\Model\ShipMount[]
     */
    public function getMounts(): array
    {
        return $this->container['mounts'];
    }

    /**
     * Sets mounts
     *
     * @param \OpenAPI\Client\Model\ShipMount[] $mounts Mounts installed in this ship.
     *
     * @return $this
     */
    public function setMounts(array $mounts): static
    {
        if (is_null($mounts)) {
            throw new InvalidArgumentException('non-nullable mounts cannot be null');
        }
        $this->container['mounts'] = $mounts;

        return $this;
    }

    /**
     * Gets cargo
     *
     * @return \OpenAPI\Client\Model\ShipCargo
     */
    public function getCargo(): \OpenAPI\Client\Model\ShipCargo
    {
        return $this->container['cargo'];
    }

    /**
     * Sets cargo
     *
     * @param \OpenAPI\Client\Model\ShipCargo $cargo cargo
     *
     * @return $this
     */
    public function setCargo(\OpenAPI\Client\Model\ShipCargo $cargo): static
    {
        if (is_null($cargo)) {
            throw new InvalidArgumentException('non-nullable cargo cannot be null');
        }
        $this->container['cargo'] = $cargo;

        return $this;
    }

    /**
     * Gets fuel
     *
     * @return \OpenAPI\Client\Model\ShipFuel
     */
    public function getFuel(): \OpenAPI\Client\Model\ShipFuel
    {
        return $this->container['fuel'];
    }

    /**
     * Sets fuel
     *
     * @param \OpenAPI\Client\Model\ShipFuel $fuel fuel
     *
     * @return $this
     */
    public function setFuel(\OpenAPI\Client\Model\ShipFuel $fuel): static
    {
        if (is_null($fuel)) {
            throw new InvalidArgumentException('non-nullable fuel cannot be null');
        }
        $this->container['fuel'] = $fuel;

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


