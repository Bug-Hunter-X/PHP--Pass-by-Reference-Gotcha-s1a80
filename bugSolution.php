```php
function processData(array &$data): array {
  // ... some processing ...
  return $data;
}

$data = [1, 2, 3];
$result = processData($data);

if ($result === $data) {
  // This condition will now always be true if the function doesn't create a new array.
  echo "Data is the same";
} else {
  echo "Data is different";
}
```