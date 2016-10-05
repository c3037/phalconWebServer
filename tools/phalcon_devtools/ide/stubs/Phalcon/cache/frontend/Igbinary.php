<?php

namespace Phalcon\Cache\Frontend;

/**
 * Phalcon\Cache\Frontend\Igbinary
 * Allows to cache native PHP data in a serialized form using igbinary extension
 * <code>
 * // Cache the files for 2 days using Igbinary frontend
 * $frontCache = new \Phalcon\Cache\Frontend\Igbinary(array(
 * "lifetime" => 172800
 * ));
 * // Create the component that will cache "Igbinary" to a "File" backend
 * // Set the cache file directory - important to keep the "/" at the end of
 * // of the value for the folder
 * $cache = new \Phalcon\Cache\Backend\File($frontCache, array(
 * "cacheDir" => "../app/cache/"
 * ));
 * // Try to get cached records
 * $cacheKey  = 'robots_order_id.cache';
 * $robots    = $cache->get($cacheKey);
 * if ($robots === null) {
 * // $robots is null due to cache expiration or data do not exist
 * // Make the database call and populate the variable
 * $robots = Robots::find(array("order" => "id"));
 * // Store it in the cache
 * $cache->save($cacheKey, $robots);
 * }
 * // Use $robots :)
 * foreach ($robots as $robot) {
 * echo $robot->name, "\n";
 * }
 * </code>
 */
class Igbinary extends \Phalcon\Cache\Frontend\Data implements \Phalcon\Cache\FrontendInterface
{

    /**
     * Phalcon\Cache\Frontend\Data constructor
     *
     * @param array $frontendOptions 
     */
    public function __construct($frontendOptions = null) {}

    /**
     * Returns the cache lifetime
     *
     * @return int 
     */
    public function getLifetime() {}

    /**
     * Check whether if frontend is buffering output
     *
     * @return bool 
     */
    public function isBuffering() {}

    /**
     * Starts output frontend. Actually, does nothing
     */
    public function start() {}

    /**
     * Returns output cached content
     *
     * @return string 
     */
    public function getContent() {}

    /**
     * Stops output frontend
     */
    public function stop() {}

    /**
     * Serializes data before storing them
     *
     * @param mixed $data 
     * @return string 
     */
    public function beforeStore($data) {}

    /**
     * Unserializes data after retrieval
     *
     * @param mixed $data 
     * @return mixed 
     */
    public function afterRetrieve($data) {}

}
