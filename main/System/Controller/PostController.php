<?php

namespace Makaroni\System\Controller;

use Makaroni\Core\Validation\Validation;
use Makaroni\System\Model\Post;

class PostController
{

    public function getAll()
    {
        $posts = Post::all()->run();
        return view('posts', compact('posts'));
    }

    public function getBySlug($slug)
    {
        (new Validation)->validate([['slug', $slug, 'words']]);
        $post = Post::all()->where(['slug', '=', $slug])->run()[0];
        return view('post', ['post' => $post, 'title' => $post['title']]);
    }

    public function create()
    {
        return view('create', ['title' => 'New Post']);
    }

    public function store()
    {
        $title = request()->input("title");
        $slug = request()->input("slug");
        $body = request()->input("body");

        (new Validation)->validate([
            ['title', $title, 'words'],
            ['slug', $slug, 'words'],
            ['body', $body, 'words'],
        ]);

        Post::insert([
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
        ])->run();

        redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::all()->where(['id', '=', $id])->run()[0];

        return view('edit', ['post' => $post, 'title' => 'Update Post']);
    }

    public function update($id)
    {
        $postId = $id;
        $title = request()->input("title");
        $slug = request()->input("slug");
        $body = request()->input("body");

        (new Validation)->validate([
            ['id', $postId, 'int'],
            ['title', $title, 'words'],
            ['slug', $slug, 'words'],
            ['body', $body, 'words'],
        ]);

        Post::update([
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
        ])->where(['id', '=', $postId])->run();

        redirect('/posts');
    }

    public function delete($id)
    {
        Post::delete()->where(['id', '=', $id])->run();

        redirect('/posts');
    }
}
