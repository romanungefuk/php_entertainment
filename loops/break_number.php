<?php
$i = $j = 0;
while (true) {
    while (true)
    {
        $i++;
        if ($i > 5) break 1;
        echo "$i<br />";
    }
    $i = 0;
    $j++;
    if ($j > 5) break 1;
}