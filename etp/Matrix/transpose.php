<?php

function transposematrix($matrix) {
    $transpose = array();
    $row = count($matrix);
    $col = count($matrix[0]);

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $transpose[$i][$j] = $matrix[$j][$i];
        }
    }

    return $transpose;
}

$matrix = [
    array(1, 2, 3),
    array(4, 33, 6),
    array(7, 8, 9)
];

$transpose = transposematrix($matrix);

echo "Transposed Matrix:"."<br>";
foreach ($transpose as $row) {
    foreach ($row as $element) {
        echo $element . " ";  // Print elements in the same row
    }
    echo "<br>";  // New line after each row
}

?>
