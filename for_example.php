<?php
// input: A pair of numbers: min and max for a range
fwrite(STDOUT, 'Enter the start of the range: ');
$start = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter the end of the range: ');
$end = trim(fgets(STDIN));

/*initialization*/
for ($i = $start; $i <= $end ;$i++) {
    //  process: modulus
    if ($i % 2 === 0) {
        // output: only even numbers
        echo $i, PHP_EOL;
    }
}
