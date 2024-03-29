<?php
/**
 * ShipType
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

/**
 * ShipType Class Doc Comment
 *
 * @description Type of ship
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum ShipType: string
{
    case PROBE = 'SHIP_PROBE';

    case MINING_DRONE = 'SHIP_MINING_DRONE';

    case SIPHON_DRONE = 'SHIP_SIPHON_DRONE';

    case INTERCEPTOR = 'SHIP_INTERCEPTOR';

    case LIGHT_HAULER = 'SHIP_LIGHT_HAULER';

    case COMMAND_FRIGATE = 'SHIP_COMMAND_FRIGATE';

    case EXPLORER = 'SHIP_EXPLORER';

    case HEAVY_FREIGHTER = 'SHIP_HEAVY_FREIGHTER';

    case LIGHT_SHUTTLE = 'SHIP_LIGHT_SHUTTLE';

    case ORE_HOUND = 'SHIP_ORE_HOUND';

    case REFINING_FREIGHTER = 'SHIP_REFINING_FREIGHTER';

    case SURVEYOR = 'SHIP_SURVEYOR';

}


