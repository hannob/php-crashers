<?php
/* Recursion in __clone() function.
 *
 * Crashes all currently supported PHP versions (5.6, 7.0, 7.1).
 *
 * A __clone() function that calls clone on the object itself, causing a recursion.
 *
 * This was reported to PHP:
 * - https://bugs.php.net/bug.php?id=64196 (patch was supplied in 2013, but never got applied)
 */

class c
{
    public function __clone()
    {
        clone $this;
    }
}

clone new c();
