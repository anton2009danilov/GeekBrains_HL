<div>Объём используемой приложением памяти <?=xdebug_memory_usage()?></div>
<div>Время, затраченное на выполнение кода <?=xdebug_time_index()?></div>
<hr>

<?php
require_once('vendor/autoload.php');
include_once ('RedisCacheProvider.php');


$r = new RedisCacheProvider();
$r->set('hello', 'Hello!', 1000);
var_dump($r->get('hello'));


// Объём используемой приложением памяти с кэшем Redis: 397408
// Объём используемой приложением памяти без кэша: 396104

// Время, затраченное на выполнение кода с кэшем Redis: 0.00073099136352539
// Время, затраченное на выполнение кода без кэша: 0.00072097778320312