<?php
//    var_dump(phpinfo());

    session_start();
    $_SESSION['user2'] = 'USER_NAME_222';
    var_dump($_SESSION);

//    var_dump($_SESSION);

//    $cache = new Memcached();
//    $cache->addServer('192.168.56.103', 11211);
//    $cache->addServer('localhost', 11211);
//    $cache->set('id2', '2');

//    var_dump($cache->get('id'));
//    var_dump($cache->get('id2'));



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2mysite</title>
</head>
<body>
<h1>mysite2.local</h1>

</body>
</html>