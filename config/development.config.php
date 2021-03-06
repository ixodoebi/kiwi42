<?php
/**
 * kiwi42
 *
 * @package kiwi42
 * @link https://github.com/raum42/kiwi42
 * @copyright Copyright (c) 2010 - 2016 raum42 (https://www.raum42.at)
 * @license MIT License
 * @author raum42 <kiwi@raum42.at>
 *
 */

if (DEVELOPMENT_MODE !== true) {
    return [];
}

return [
    'module_listener_options' => [
        'config_cache_enabled' => false,
        'module_map_cache_enabled' => false,
    ],
];
