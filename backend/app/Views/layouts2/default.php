<!DOCTYPE html>
<html lang="en">

<head>
    <title>My First Bootstrap 5 Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <?= $this->include('layouts2/header') ?>
    <?= $this->include('layouts2/navbar') ?>
    <?= $this->include('layouts2/sidebar') ?>
    <?= $this->renderSection('home') ?>
    <?= $this->renderSection('home_page') ?>
    <?= $this->include('layouts2/footer') ?>


</body>

</html>