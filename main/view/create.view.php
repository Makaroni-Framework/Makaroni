<form action="<?= router()->url('post-store') ?>" method="POST">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" required>
        <label>Slug</label>
        <input type="text" class="form-control" name="slug" required>
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" rows="3" required></textarea>
    </div>

    <input type="submit" value="Submit" class="form-control btn-success">

</form>