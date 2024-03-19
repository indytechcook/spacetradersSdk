<?php
/**
 * ShipFrame
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
 * ShipFrame Class Doc Comment
 *
 * @description The frame of the ship. The frame determines the number of modules and mounting points of the ship, as well as base fuel capacity. As the condition of the frame takes more wear, the ship will become more sluggish and less maneuverable.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ShipFrame implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipFrame';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'symbol' => 'string',
        'name' => 'string',
        'description' => 'string',
        'condition' => 'float',
        'integrity' => 'float',
        'moduleSlots' => 'int',
        'mountingPoints' => 'int',
        'fuelCapacity' => 'int',
        'requirements' => '\OpenAPI\Client\Model\ShipRequirements'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'symbol' => null,
        'name' => null,
        'description' => null,
        'condition' => 'double',
        'integrity' => 'double',
        'moduleSlots' => null,
        'mountingPoints' => null,
        'fuelCapacity' => null,
        'requirements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'symbol' => false,
        'name' => false,
        'description' => false,
        'condition' => false,
        'integrity' => false,
        'moduleSlots' => false,
        'mountingPoints' => false,
        'fuelCapacity' => false,
        'requirements' => false
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
        'name' => 'name',
        'description' => 'description',
        'condition' => 'condition',
        'integrity' => 'integrity',
        'moduleSlots' => 'moduleSlots',
        'mountingPoints' => 'mountingPoints',
        'fuelCapacity' => 'fuelCapacity',
        'requirements' => 'requirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'symbol' => 'setSymbol',
        'name' => 'setName',
        'description' => 'setDescription',
        'condition' => 'setCondition',
        'integrity' => 'setIntegrity',
        'moduleSlots' => 'setModuleSlots',
        'mountingPoints' => 'setMountingPoints',
        'fuelCapacity' => 'setFuelCapacity',
        'requirements' => 'setRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'symbol' => 'getSymbol',
        'name' => 'getName',
        'description' => 'getDescription',
        'condition' => 'getCondition',
        'integrity' => 'getIntegrity',
        'moduleSlots' => 'getModuleSlots',
        'mountingPoints' => 'getMountingPoints',
        'fuelCapacity' => 'getFuelCapacity',
        'requirements' => 'getRequirements'
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

    public const SYMBOL_PROBE = 'FRAME_PROBE';
    public const SYMBOL_DRONE = 'FRAME_DRONE';
    public const SYMBOL_INTERCEPTOR = 'FRAME_INTERCEPTOR';
    public const SYMBOL_RACER = 'FRAME_RACER';
    public const SYMBOL_FIGHTER = 'FRAME_FIGHTER';
    public const SYMBOL_FRIGATE = 'FRAME_FRIGATE';
    public const SYMBOL_SHUTTLE = 'FRAME_SHUTTLE';
    public const SYMBOL_EXPLORER = 'FRAME_EXPLORER';
    public const SYMBOL_MINER = 'FRAME_MINER';
    public const SYMBOL_LIGHT_FREIGHTER = 'FRAME_LIGHT_FREIGHTER';
    public const SYMBOL_HEAVY_FREIGHTER = 'FRAME_HEAVY_FREIGHTER';
    public const SYMBOL_TRANSPORT = 'FRAME_TRANSPORT';
    public const SYMBOL_DESTROYER = 'FRAME_DESTROYER';
    public const SYMBOL_CRUISER = 'FRAME_CRUISER';
    public const SYMBOL_CARRIER = 'FRAME_CARRIER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSymbolAllowableValues()
    {
        return [
            self::SYMBOL_PROBE,
            self::SYMBOL_DRONE,
            self::SYMBOL_INTERCEPTOR,
            self::SYMBOL_RACER,
            self::SYMBOL_FIGHTER,
            self::SYMBOL_FRIGATE,
            self::SYMBOL_SHUTTLE,
            self::SYMBOL_EXPLORER,
            self::SYMBOL_MINER,
            self::SYMBOL_LIGHT_FREIGHTER,
            self::SYMBOL_HEAVY_FREIGHTER,
            self::SYMBOL_TRANSPORT,
            self::SYMBOL_DESTROYER,
            self::SYMBOL_CRUISER,
            self::SYMBOL_CARRIER,
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('integrity', $data ?? [], null);
        $this->setIfExists('moduleSlots', $data ?? [], null);
        $this->setIfExists('mountingPoints', $data ?? [], null);
        $this->setIfExists('fuelCapacity', $data ?? [], null);
        $this->setIfExists('requirements', $data ?? [], null);
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
        $allowedValues = $this->getSymbolAllowableValues();
        if (!is_null($this->container['symbol']) && !in_array($this->container['symbol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'symbol', must be one of '%s'",
                $this->container['symbol'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if (($this->container['condition'] > 1)) {
            $invalidProperties[] = "invalid value for 'condition', must be smaller than or equal to 1.";
        }

        if (($this->container['condition'] < 0)) {
            $invalidProperties[] = "invalid value for 'condition', must be bigger than or equal to 0.";
        }

        if ($this->container['integrity'] === null) {
            $invalidProperties[] = "'integrity' can't be null";
        }
        if (($this->container['integrity'] > 1)) {
            $invalidProperties[] = "invalid value for 'integrity', must be smaller than or equal to 1.";
        }

        if (($this->container['integrity'] < 0)) {
            $invalidProperties[] = "invalid value for 'integrity', must be bigger than or equal to 0.";
        }

        if ($this->container['moduleSlots'] === null) {
            $invalidProperties[] = "'moduleSlots' can't be null";
        }
        if (($this->container['moduleSlots'] < 0)) {
            $invalidProperties[] = "invalid value for 'moduleSlots', must be bigger than or equal to 0.";
        }

        if ($this->container['mountingPoints'] === null) {
            $invalidProperties[] = "'mountingPoints' can't be null";
        }
        if (($this->container['mountingPoints'] < 0)) {
            $invalidProperties[] = "invalid value for 'mountingPoints', must be bigger than or equal to 0.";
        }

        if ($this->container['fuelCapacity'] === null) {
            $invalidProperties[] = "'fuelCapacity' can't be null";
        }
        if (($this->container['fuelCapacity'] < 0)) {
            $invalidProperties[] = "invalid value for 'fuelCapacity', must be bigger than or equal to 0.";
        }

        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
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
     * @param string $symbol Symbol of the frame.
     *
     * @return $this
     */
    public function setSymbol(string $symbol): static
    {
        if (is_null($symbol)) {
            throw new InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $allowedValues = $this->getSymbolAllowableValues();
        if (!in_array($symbol, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'symbol', must be one of '%s'",
                    $symbol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the frame.
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the frame.
     *
     * @return $this
     */
    public function setDescription(string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return float
     */
    public function getCondition(): float
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param float $condition The repairable condition of a component. A value of 0 indicates the component needs significant repairs, while a value of 1 indicates the component is in near perfect condition. As the condition of a component is repaired, the overall integrity of the component decreases.
     *
     * @return $this
     */
    public function setCondition(float $condition): static
    {
        if (is_null($condition)) {
            throw new InvalidArgumentException('non-nullable condition cannot be null');
        }

        if (($condition > 1)) {
            throw new InvalidArgumentException('invalid value for $condition when calling ShipFrame., must be smaller than or equal to 1.');
        }
        if (($condition < 0)) {
            throw new InvalidArgumentException('invalid value for $condition when calling ShipFrame., must be bigger than or equal to 0.');
        }

        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets integrity
     *
     * @return float
     */
    public function getIntegrity(): float
    {
        return $this->container['integrity'];
    }

    /**
     * Sets integrity
     *
     * @param float $integrity The overall integrity of the component, which determines the performance of the component. A value of 0 indicates that the component is almost completely degraded, while a value of 1 indicates that the component is in near perfect condition. The integrity of the component is non-repairable, and represents permanent wear over time.
     *
     * @return $this
     */
    public function setIntegrity(float $integrity): static
    {
        if (is_null($integrity)) {
            throw new InvalidArgumentException('non-nullable integrity cannot be null');
        }

        if (($integrity > 1)) {
            throw new InvalidArgumentException('invalid value for $integrity when calling ShipFrame., must be smaller than or equal to 1.');
        }
        if (($integrity < 0)) {
            throw new InvalidArgumentException('invalid value for $integrity when calling ShipFrame., must be bigger than or equal to 0.');
        }

        $this->container['integrity'] = $integrity;

        return $this;
    }

    /**
     * Gets moduleSlots
     *
     * @return int
     */
    public function getModuleSlots(): int
    {
        return $this->container['moduleSlots'];
    }

    /**
     * Sets moduleSlots
     *
     * @param int $moduleSlots The amount of slots that can be dedicated to modules installed in the ship. Each installed module take up a number of slots, and once there are no more slots, no new modules can be installed.
     *
     * @return $this
     */
    public function setModuleSlots(int $moduleSlots): static
    {
        if (is_null($moduleSlots)) {
            throw new InvalidArgumentException('non-nullable moduleSlots cannot be null');
        }

        if (($moduleSlots < 0)) {
            throw new InvalidArgumentException('invalid value for $moduleSlots when calling ShipFrame., must be bigger than or equal to 0.');
        }

        $this->container['moduleSlots'] = $moduleSlots;

        return $this;
    }

    /**
     * Gets mountingPoints
     *
     * @return int
     */
    public function getMountingPoints(): int
    {
        return $this->container['mountingPoints'];
    }

    /**
     * Sets mountingPoints
     *
     * @param int $mountingPoints The amount of slots that can be dedicated to mounts installed in the ship. Each installed mount takes up a number of points, and once there are no more points remaining, no new mounts can be installed.
     *
     * @return $this
     */
    public function setMountingPoints(int $mountingPoints): static
    {
        if (is_null($mountingPoints)) {
            throw new InvalidArgumentException('non-nullable mountingPoints cannot be null');
        }

        if (($mountingPoints < 0)) {
            throw new InvalidArgumentException('invalid value for $mountingPoints when calling ShipFrame., must be bigger than or equal to 0.');
        }

        $this->container['mountingPoints'] = $mountingPoints;

        return $this;
    }

    /**
     * Gets fuelCapacity
     *
     * @return int
     */
    public function getFuelCapacity(): int
    {
        return $this->container['fuelCapacity'];
    }

    /**
     * Sets fuelCapacity
     *
     * @param int $fuelCapacity The maximum amount of fuel that can be stored in this ship. When refueling, the ship will be refueled to this amount.
     *
     * @return $this
     */
    public function setFuelCapacity(int $fuelCapacity): static
    {
        if (is_null($fuelCapacity)) {
            throw new InvalidArgumentException('non-nullable fuelCapacity cannot be null');
        }

        if (($fuelCapacity < 0)) {
            throw new InvalidArgumentException('invalid value for $fuelCapacity when calling ShipFrame., must be bigger than or equal to 0.');
        }

        $this->container['fuelCapacity'] = $fuelCapacity;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \OpenAPI\Client\Model\ShipRequirements
     */
    public function getRequirements(): \OpenAPI\Client\Model\ShipRequirements
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \OpenAPI\Client\Model\ShipRequirements $requirements requirements
     *
     * @return $this
     */
    public function setRequirements(\OpenAPI\Client\Model\ShipRequirements $requirements): static
    {
        if (is_null($requirements)) {
            throw new InvalidArgumentException('non-nullable requirements cannot be null');
        }
        $this->container['requirements'] = $requirements;

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

