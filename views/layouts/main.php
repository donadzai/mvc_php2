<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once "./views/layouts/header.php" ?>
        <div class="">
            <?php require_once PATH_VIEW . $view; ?>
        </div>
        <?php require_once "./views/layouts/footer.php" ?>
    </div>
</body>

</html>