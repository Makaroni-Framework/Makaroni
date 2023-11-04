<?php

use Makaroni\System\Controller\PostController;

router()->get("/posts", [PostController::class, 'getAll'])->name("posts");

router()->get("/post/new", [PostController::class, 'create'])->name("post-create");
router()->post("/post/create", [PostController::class, 'store'])->name("post-store");

router()->get("/post/{id}/edit", [PostController::class, 'edit'])->name("post-edit");
router()->post("/post/{id}/update", [PostController::class, 'update'])->name("post-update");

router()->get("/post/{id}/delete", [PostController::class, 'delete'])->name("post-delete");

router()->get("/post/{slug}", [PostController::class, 'getBySlug'])->name("post");
