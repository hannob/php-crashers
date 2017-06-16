# php-crashers
Example scripts that cause segfaults in PHP

description
===========

PHP is a memory safe language with a garbage collector, thus it usually
shouldn't crash unless there is a bug.

However while analyzing why PHP services crash I occasionally found
situations where PHP crashed that the PHP developers didn't consider
worth fixing. I'll collect them here.

links
=====

* [Similar repository for Python](https://hg.python.org/cpython/file/default/Lib/test/crashers/)
* [CrashingPython in the Python wiki](https://wiki.python.org/moin/CrashingPython)
