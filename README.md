# PHP Implicit Array Initialization Bug

This repository demonstrates a subtle bug in PHP related to implicit array initialization when using pass-by-reference within functions.

The `incrementValue` function intends to increment the value at a given index in an array.  However, if the index doesn't exist, it implicitly creates the index with a value of 0 *before* the increment operation. This may not be what you expect if the goal is to only increment if the index already exists.

The solution shows how to avoid this issue by explicitly checking for the existence of the index using `array_key_exists` and handling the case where it's not found accordingly.