<?php foreach ($posts as $post) : ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <a href="<?= router()->url('post', ['slug' => $post['slug']]) ?>" class="btn btn-primary">More...</a>
            <a href="<?= router()->url('post-edit', ['id' => $post['id']]) ?>" class="btn btn-success">Update</a>
            <a href="<?= router()->url('post-delete', ['id' => $post['id']]) ?>" class="btn btn-danger">Delete</a>

        </div>
    </div>
<?php endforeach; ?>