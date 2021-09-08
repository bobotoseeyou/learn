<?php
$a = [];
try {
//    test();
    echo  $a['xx'];
} catch(Throwable $e) {
    echo $e->getMessage() . ' zyf';
}

try {
//    test();
    echo $a['xx'];
} catch(Error $e) {
    echo $e->getMessage() . ' zyf';
}