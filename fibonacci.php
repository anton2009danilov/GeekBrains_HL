<div>Объём используемой приложением памяти <?=xdebug_memory_usage()?></div>
<div>Время, затраченное на выполнение кода <?=xdebug_time_index()?></div>
<hr>
<?php

require_once('vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('memory');
$log->pushHandler(new StreamHandler('log/memory.log', Logger::DEBUG));
$log->debug('start: '.memory_get_usage());

function fibonacci() {
    $num = 0;

    $log = new Logger('memory');
    $log->pushHandler(new StreamHandler('log/memory.log', Logger::DEBUG));
    $log->debug('номер итерации: '.$num);
    $log->debug("Объём используемой памяти: " . memory_get_usage());

    $n1 = 0;
    $n2 = 1;
    echo "<h3>Fibonacci series for first 12 numbers: </h3>";
    echo "\n";
    echo $n1 . ' ' . $n2 . ' ';

    while ($num < 10) {
        if ($num === 2) {
            req(1);
        }
        $log->debug('номер итерации: '.$num);
        $log->debug("Объём используемой памяти: " . memory_get_usage());
        $n3 = $n2 + $n1;
        echo $n3 . ' ';
        $n1 = $n2;
        $n2 = $n3;
        $num = $num + 1;

        echo "<br><br> 'num': ";
        xdebug_var_dump($num);
        echo "'n1': ";
        xdebug_var_dump($n1);
        echo "'n2': ";
        xdebug_var_dump($n2);
        echo "<hr>";
    }

}

fibonacci();

function req($counter){
    if($counter > 100) {
        echo 2;
        return true;
    }

    if ($counter == 99) {
        $log = new Logger('memory');
        $log->pushHandler(new StreamHandler('log/memory.log', Logger::DEBUG));
        $log->debug('Рекурсия');
        $log->debug("Объём используемой памяти: " . memory_get_usage());
    }

    echo 1;
    $counter++;
    req($counter);
}


?>




