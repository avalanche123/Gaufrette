<?php

namespace Gaufrette\Filesystem;

/**
 * This interface must be implemented by all filesystem adapters
 *
 * @author Antoine Hérault <antoine.herault@gmail.com>
 */
interface Adapter
{
    /**
     * Reads the content of the file
     *
     * @param  string $key
     *
     * @return string
     */
    function read($key);

    /**
     * Writes the given content into the file
     *
     * @param  string $key
     * @param  string $content
     *
     * @return integer The number of bytes that were written into the file, or
    *                 FALSE on failure
     */
    function write($key, $content);

    /**
     * Indicates whether the file exists
     *
     * @param  string $key
     *
     * @return boolean
     */
    function exists($key);

    /**
     * Returns an array of all keys matching the specified pattern
     *
     * @param  string $pattern
     *
     * @return array
     */
    function list($pattern);
}
