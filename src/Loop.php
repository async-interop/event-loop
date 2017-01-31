<?php

namespace AsyncInterop;

use AsyncInterop\Loop\Driver;

/**
 * Accessor to allow global access to the event loop
 *
 * @see \AsyncInterop\Loop\Driver
 */
final class Loop
{
    /**
     * @var Driver|null
     */
    private static $driver = null;

    /**
     * Retrieve the current event loop driver
     *
     * @return Driver|null
     */
    public static function get()
    {
        return self::$driver;
    }

    /**
     * Set the event loop driver
     *
     * @param $driver Driver|null
     */
    public static function set(Driver $driver = null)
    {
        self::$driver = $driver;
    }

    /**
     * Disable construction as this is a static class
     */
    private function __construct()
    {
        // intentionally left blank
    }
}
