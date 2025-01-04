```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    // Type checking and casting to ensure numeric values 
    if(is_numeric($number)){
        $sum += (float)$number; 
    } else {
        // Handle non-numeric values appropriately (e.g., throw an exception, return an error, etc.)
        trigger_error('Non-numeric value encountered in array.', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1,2,'a',4,5];
echo calculateSum($numbers); // Output: 12 and a warning
```