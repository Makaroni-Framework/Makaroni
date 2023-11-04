<form action="<?= router()->url('post-update', ['id' => $post['id']])?>" method="POST">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?= $post['title'] ?>" required>
        <label>Slug</label>
        <input type="text" class="form-control" name="slug" value="<?= $post['slug'] ?>" required>
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" rows="3" required><?= $post['body'] ?></textarea>
    </div>

    <input type="submit" value="Submit" class="form-control btn-success">

</form>