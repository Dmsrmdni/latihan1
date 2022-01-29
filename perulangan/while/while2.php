<?php
$y = 1;
while ($y <= 10) {
    echo '<br>';
    $x = 1;
    while ($x <= $y) {
        echo '* &nbsp';
        ++$x;
    }
    ++$y;
}

?>

<br>
<hr>

<?php
$a = 1;
while ($a <= 10) {
    echo '<br>';
    $b = $a;
    while ($b <= 10) {
        echo '* &nbsp';
        ++$b;
    }
    ++$a;
}
