<?php
/* Recursion in __sleep() function.
 *
 * Crashes all currently supported PHP versions (5.6, 7.0, 7.1).
 *
 * A __sleep() function that calls serialize() on the (serialized) object itself, causing a recursion.
 */

class s
{
    public function __sleep()
    {
        serialize($this);
    }
}

serialize(new s());
