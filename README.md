# PHP Pass-by-Reference Bug

This repository demonstrates a subtle bug in PHP related to how arrays are passed to functions.  By default, PHP passes arrays by reference, meaning changes within a function directly affect the original array.  This can lead to unexpected results if the programmer isn't aware of this behavior.

The `bug.php` file shows an example where a function appears to return a modified array, but in reality, modifies the original array.  The `bugSolution.php` shows the correct approach using the `&` operator.