<?php

/**
 * @var $app \Surf\Application
 */
use Landowner\Protocol\LandownerController;
$app->addProtocol(
    'enter.room',
    LandownerController::class . ':enterRoom'
);

$app->addProtocol(
    'room.player',
    LandownerController::class . ':roomPlayer'
);

$app->addProtocol(
    'player.ready',
    LandownerController::class . ':ready'
);
