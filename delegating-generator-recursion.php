<?php
/* Recursion in mutually delegating generators.
 *
 * Crashes all currently supported PHP versions that support generator delegation (7.0, 7.1).
 *
 * A generator delegating to another generator that again delegates to the first one, causing a recursion.
 */

function a()
{
    yield from b();
}

function b()
{
    yield from a();
}

foreach(a() as $v);
