<?php
use Swoole\Coroutine;
use function Swoole\Coroutine\run;
use function Swoole\Coroutine\go;

run(function() {
    $result = [];
    Coroutine::join([
        go(function () use (&$result) {
            $result['baidu'] = file_get_contents("https://www.baidu.com/");
        }),
        go(function () use (&$result) {
            $result['taobao'] = file_get_contents("https://www.taobao.com/");
        })
    ]);

    echo "all done\n";
});