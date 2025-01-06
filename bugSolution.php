```php
function processData(array $data): array {
  $dataCopy = $data; // Create a copy of the input array
  foreach ($dataCopy as $key => $value) {
    if (is_array($value)) {
      $dataCopy[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $dataCopy[$key] = substr($value, 0, 10); // Truncate strings
    }
  }
  return $dataCopy;
}

$inputArray = [
  "name" => "John Doe",
  "address" => "123 Main Street, Anytown, CA 91234",
  "details" => [
    "phone" => "555-123-4567",
    "email" => "john.doe@example.com"
  ]
];

$processedArray = processData($inputArray);
print_r($processedArray); // Output reflects correctly modified copy
print_r($inputArray); // Original array remains unchanged
```