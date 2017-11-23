<?php

/**
 * Recursion in JsonSerializable::jsonSerialize().
 *
 * Crashes all currently supported PHP versions (5.6, 7.0, 7.1, 7.2.0RC6).
 *
 * @see https://bugs.php.net/bug.php?id=67265
 */
class Crash implements JsonSerializable
{
    public function jsonSerialize()
    {
        return clone $this;
    }
}

json_encode(new Crash());
