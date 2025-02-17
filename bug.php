```php
function myFunction($a, $b) {
  if ($a === 0 || $b === 0) {
    return 0; // Handle division by zero
  }
  return $a / $b;
}

$result = myFunction(10, 0);
echo $result; // This will produce a warning, but the script will continue
```