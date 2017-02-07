<?php
/* Recursion in __destruct() and constructor.
 *
 * Crashes all currently supported PHP versions (5.6, 7.0, 7.1).
 *
 * A __destruct(), called during garbage collection, will instantiate a
 * new object, leading to further GC.
 */

class c
{
    public function __destruct()
    {
        new c();
    }
}

new c();
