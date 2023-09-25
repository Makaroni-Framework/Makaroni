<?php

use Makaroni\System\Controller\PostController;

$this->add("/posts", [PostController::class, 'getAll'], "posts");

$this->add("/post/new", [PostController::class, 'create'], "post-create");
$this->add("/post/create", [PostController::class, 'store'], "post-store");

$this->add("/post/{id}/edit", [PostController::class, 'edit'], "post-edit");
$this->add("/post/{id}/update", [PostController::class, 'update'], "post-update");

$this->add("/post/{id}/delete", [PostController::class, 'delete'], "post-delete");

$this->add("/post/{slug}", [PostController::class, 'getBySlug'], "post");
