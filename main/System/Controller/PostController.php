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

    public function getBySlug($parameter)
    {
        (new Validation)->validate([['slug', $parameter['slug'], 'words']]);
        $post = Post::all()->where(['slug', '=', $parameter['slug']])->run()[0];
        return view('post', compact('post'));
    }

    public function create()
    {
        return view('create');
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

    public function edit($parameter)
    {
        $post = Post::all()->where(['id', '=', $parameter['id']])->run()[0];

        return view('edit', compact('post'));
    }

    public function update($parameter)
    {
        $id = $parameter["id"];
        $title = request()->input("title");
        $slug = request()->input("slug");
        $body = request()->input("body");

        (new Validation)->validate([
            ['id', $id, 'int'],
            ['title', $title, 'words'],
            ['slug', $slug, 'words'],
            ['body', $body, 'words'],
        ]);

        Post::update([
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
        ])->where(['id', '=', $id])->run();
        
        redirect('/posts');
    }

    public function delete($parameter)
    {
        Post::delete()->where(['id', '=', $parameter['id']])->run();
    
        redirect('/posts');
    }
}
