<?php

/* Recursion of __tostring() function
 *
 * Crashes all currently supported PHP versions (5.6, 7.0, 7.1).
 *
 * The __tostring() function of a class tries to access itself as a string. This
 * causes a recursion which will ultimately crash.
 * Usually recursive function calls only cause a ZEND memory allocation error
 * message and don't crash.
 *
 * This has been reported to PHP multiple times:
 * - https://bugs.php.net/bug.php?id=46754 (claims that this is fixed in 5.3, which is not the case)
 * - https://bugs.php.net/bug.php?id=67319 (closed as "Not a bug")
 */

class Crash
{
    public function __tostring()
    {
        return "".$this;
    }
}

"".(new Crash());
