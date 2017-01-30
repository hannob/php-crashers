# php-crashers
Example scripts that cause segfaults in PHP

description
===========

PHP is a memory safe language with a garbage collector, thus it usually
shouldn't crash unless there is a bug.

However while analyzing why PHP services crash I occasionally found
situations where PHP crashed that the PHP developers didn't consider
worth fixing. I'll collect them here.
