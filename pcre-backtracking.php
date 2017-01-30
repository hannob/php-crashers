<?php
/* Backtracking stack overflow in regular expresssion.
 *
 * Whether this crashes depends on several circumstances, including the version, configuration
 * and whether libpcre was compiled with jit support.
 *
 * This has been reported to PHP:
 * - https://bugs.php.net/bug.php?id=71720 (closed as "Not a bug")
 */

preg_match("/(0)*/", str_repeat("0", 15000));
