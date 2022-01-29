<?php

$a = 1;

do {
    $b = 1;
    do {
        echo '* &nbsp';
        ++$b;
    } while ($b <= $a);
    echo '<br>';
    ++$a;
} while ($a <= 10);

?>

<br><hr>

<?php

$x = 1;

do {
    $y = $x;
    do {
        echo '* &nbsp';
        ++$y;
    } while ($y <= 10);
    echo '<br>';
    ++$x;
} while ($x <= 10);

?>
