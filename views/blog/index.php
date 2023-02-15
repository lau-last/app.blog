<h1>Les derniers articles</h1>
<?php foreach ($params['posts'] as $post): ?>
    <div class="card">
        <div class="card-body">
            <h2><?= $post->title ?></h2>
            <small><?= $post->created_at ?></small>
            <p><?= $post->content ?></p>
            <a href="/PhpStorm/myapp/posts/<?= $post->id ?>" class="btn btn-primary">Lire plus</a>
        </div>
    </div>
<?php endforeach; ?>