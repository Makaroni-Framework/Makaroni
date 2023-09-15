<?php foreach ($posts as $post) : ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <a href="/post/<?= $post['slug'] ?>" class="btn btn-primary">More...</a>
            <a href="/post/<?= $post['id'] ?>/edit" class="btn btn-success">Update</a>
            <a href="/post/<?= $post['id'] ?>/delete" class="btn btn-danger">Delete</a>

        </div>
    </div>
<?php endforeach; ?>