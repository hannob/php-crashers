<?php
/* Recursion via a self-yielding generator.
 *
 * Crashes all currently supported PHP versions that support generator delegation (7.0, 7.1).
 *
 * A generator delegating to itself, causing a recursion.
 */

function a()
{
    yield from a();
}

foreach(a() as $v);
