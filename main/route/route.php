<?php

use Makaroni\System\Controller\PostController;


$this->add("/posts", ['_controller' => PostController::class, '_method' => 'getAll'], "posts");

$this->add("/post/new", ['_controller' => PostController::class, '_method' => 'create'], "post-create");
$this->add("/post/create", ['_controller' => PostController::class, '_method' => 'store'], "post-store");

$this->add("/post/edit/{id}", ['_controller' => PostController::class, '_method' => 'edit'], "post-edit");
$this->add("/post/update/{id}", ['_controller' => PostController::class, '_method' => 'update'], "post-update");

$this->add("/post/delete/{id}", ['_controller' => PostController::class, '_method' => 'delete'], "post-delete");

$this->add("/post/{slug}", ['_controller' => PostController::class, '_method' => 'getBySlug'], "post");

