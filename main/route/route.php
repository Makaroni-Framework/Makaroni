<?php

use Makaroni\System\Controller\FoodController;


$this->add("/", ['_controller' => FoodController::class, '_method' => 'index'], "makaroni_welcome");

