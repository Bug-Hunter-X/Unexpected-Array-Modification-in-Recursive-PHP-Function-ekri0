# PHP Recursive Function Bug

This repository demonstrates a subtle bug in a recursive PHP function that unexpectedly modifies the original array passed as an argument.  The function aims to process an array, truncating strings longer than 10 characters and recursively processing nested arrays. However, due to the way the array is modified within the loop, the original array is unintentionally altered. This can lead to unexpected behavior and errors in applications relying on the original array's integrity.

## Bug Description

The recursive function `processData` modifies the input array directly. When processing nested arrays, this modification affects the original array passed to the function, leading to unintended side effects and potential data corruption.

## How to Reproduce

1. Clone this repository.
2. Run the `bug.php` script. 
3. Observe the unexpected output compared to the intended modification.

## Solution

The solution involves creating a copy of the array before processing to avoid modifying the original array. The solution code is found in the `bugSolution.php` file.
