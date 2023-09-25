<?php

use Makaroni\System\Controller\UserController;

$this->add("/", [UserController::class, 'index'], "makaroni_welcome");
