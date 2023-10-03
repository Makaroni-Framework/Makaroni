<?php

use Makaroni\Core\Database\Connection;

app()->bind('config', fn() => include('config/config.php'));
app()->singleton('connection', fn() =>  (new Connection)->setOptions(config('database'))->connect());