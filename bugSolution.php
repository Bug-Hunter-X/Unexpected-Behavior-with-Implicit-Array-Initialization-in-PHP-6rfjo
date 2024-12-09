```php
function incrementValue(array &$arr, int $index): void {
  if (array_key_exists($index, $arr)) {
    $arr[$index]++;
  }
}

$myArray = [1, 2, 3];
incrementValue($myArray, 5); // Accessing a non-existent index - No change
echo json_encode($myArray); //this will show [1,2,3]
incrementValue($myArray, 2); // Accessing an existing index
echo json_encode($myArray); //this will show [1,2,4]
```