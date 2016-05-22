<?php

require './vendor/autoload.php';

$g = \LotGD\Core\Bootstrap::createGame();

$context = array();
$g->getEventManager()->publish('e/lotgd/hello-world', $context);
