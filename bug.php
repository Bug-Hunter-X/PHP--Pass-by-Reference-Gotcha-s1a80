```php
function processData(array $data): array {
  // ... some processing ...
  return $data;
}

$data = [1, 2, 3];
$result = processData($data);

if ($result === $data) {
  // This condition might not be true if processData modifies the input array by reference.
  echo "Data is the same";
} else {
  echo "Data is different";
}
```