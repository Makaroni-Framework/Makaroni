<?php
namespace Makaroni\System\Controller;

use Makaroni\Framework\Validation\Validation;
use Makaroni\System\Model\Post;

class PostController
{

    public function getAll()
    {
        $posts = Post::all()->run();
        return view('posts', $posts);
    }

    public function getBySlug($request)
    {
        $post = Post::all()->where(['slug', '=', $request['slug']])->run();
        return view('post', $post);
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

    public function edit($request)
    {
        $post = Post::all()->where(['id', '=', $request['id']])->run();

        return view('edit', $post);
    }

    public function update($request)
    {
        $id = $request["id"];
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

    public function delete($request)
    {
        Post::delete()->where(['id', '=', $request['id']])->run();
    
        redirect('/posts');
    }
}
