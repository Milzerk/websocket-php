<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('191.235.78.134', 9980, '0.0.0.0');
$app->route('/chat', new ChatServer, ['*']);
$app->run();
