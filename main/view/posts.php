<!DOCTYPE html>
<html lang="en">

<head>
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            Makaroni Blog
        </a>
        <a class="navbar-item" href="/post/new">
            New
        </a>
    </nav>

    <?php foreach($posts as $post): ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <h5 class="card-title"><?= $post['title'] ?></h5>
            <a href="/post/<?= $post['slug'] ?>" class="btn btn-primary">More...</a>
            <a href="/post/<?= $post['id']?>/edit" class="btn btn-success">Update</a>
            <a href="/post/<?= $post['id']?>/delete" class="btn btn-danger">Delete</a>

        </div>
    </div>
    <?php endforeach; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>