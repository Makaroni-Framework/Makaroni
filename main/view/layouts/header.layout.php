<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= isset($title) ? "Makaroni Blog | $title" : 'Makaroni Blog | Posts' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/posts">
            Makaroni Blog
        </a>
        <a class="navbar" href="/post/new">
            New
        </a>
    </nav>