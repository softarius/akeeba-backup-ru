<?php
$trans = file($argv[2]);

$tr = [];
foreach ($trans as $t) {
    $item = explode('=', $t);
    if (count($item) == 2) {
        $tr[$item[0]] = $item[1];
    }
}



$eng = file($argv[1]);
echo "\n";
$orig = [];
foreach ($eng as $e) {
    $item = explode('=', $e);
    if (count($item) == 2) {
        $orig[$item[0]] = $item[1];
        if (!key_exists($item[0], $tr)) {
            echo $e;
        }
    }
}
