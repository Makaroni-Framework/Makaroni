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
            Makaroni
        </a>
    </nav>

    <form action="/post/update/<?= $data[0]['id'] ?>" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<?= $data[0]['title'] ?>">
            <label>Slug</label>
            <input type="text" class="form-control" name="slug" value="<?= $data[0]['slug'] ?>">
        </div>
       
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body" rows="3" ><?= $data[0]['body'] ?></textarea>
        </div>

        <input type="submit" value="Submit" class="form-control btn-success">

    </form>

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