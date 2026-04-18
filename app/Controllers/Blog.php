<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        //
    }

    public function helloWorld(): string
    {
        return view('hello-world');
    }

    public function post($id): string
    {
        // Ambil data dari Model
        $post = $this->blogModel->getDummyPost($id);

        if (!$post) {
            return view('blog_not_found', ['id' => $id]);
        }

        return view('blog_post', ['post' => $post]);
    }
}
