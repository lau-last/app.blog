<?php

namespace App\Controllers;

use App\models\Post;

class BlogController extends Controller
{
    public function welcome()
    {
        return $this->view('blog.welcome');
    }

    public function index()
    {
        $post = new Post();
        $posts = $post->all();
        $stmt = $this->db->getPDO()->query('SELECT * FROM posts ORDER BY created_at DESC');
        $posts = $stmt->fetchAll();
        return $this->view('blog.index', compact('posts'));
    }

    public function show(int $id)
    {
        $stmt = $this->db->getPDO()->prepare('SELECT * FROM posts WHERE id = ?');
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $this->view('blog.show', compact('post'));
    }
}

/*$req = $this->db->getPDO()->query('SELECT * FROM posts');
$posts = $req->fetchAll();
foreach ($posts as $post) {
    echo $post->title;
}*/