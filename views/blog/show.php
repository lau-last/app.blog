<h1><?= $params['post']->title ?></h1>
<div>
    <?php foreach ($params['post']->getTags() as $tag):?>
        <span class="badge bg-secondary"><?= $tag->name ?></span>
    <?php endforeach; ?>
</div>
<small><?= $params['post']->created_at ?></small>
<p><?= $params['post']->content ?></p>
<a href="/PhpStorm/myapp/posts" class="btn btn-primary">Retourner en arrière</a>