```php
function incrementValue(array &$arr, int $index): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if index doesn't exist
  }
  $arr[$index]++;
}

$myArray = [1, 2, 3];
incrementValue($myArray, 5); // Accessing a non-existent index
echo json_encode($myArray); //this will only show [1,2,3] because the value is not set
incrementValue($myArray, 2); // Accessing an existing index
echo json_encode($myArray); //this will show [1,2,4]
```