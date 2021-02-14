<?php

require './vendor/autoload.php';

use Ratchet\Server\EchoServer;

$app = new Ratchet\App('191.235.78.134', 9980, '0.0.0.0');
$app->route('/echo', new EchoServer, ['*']);
$app->run();
