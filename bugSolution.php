```php
function myFunction($a, $b) {
  if ($b === 0) {
    return INF; // Return infinity in case of division by zero
  } elseif ($a === 0) {
      return 0;
  }
  return $a / $b;
}

$result = myFunction(10, 0);
if (is_infinite($result)) {
    echo "Division by zero occurred.";
} else {
    echo $result; 
}

$result2 = myFunction(0, 5);
echo "\n";
echo $result2;
```