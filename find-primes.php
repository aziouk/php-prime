<?php
function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function find_primes_in_range($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$start = 10;
$end = 50;
$prime_numbers = find_primes_in_range($start, $end);

echo "Prime numbers between $start and $end: " . implode(", ", $prime_numbers);
?>

