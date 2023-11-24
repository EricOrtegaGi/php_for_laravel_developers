<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>
        <?= $route['title'] ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-full">
        <?php require 'components/nav.php' ?>
        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-semibold leading-6 text-blue-500"><?= $route["title"] ?></h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl mb-16 py-6 sm:px-6 lg:px-8">
                <?php echo greeting(); ?>
                <?php require $route['view'] ?>
            </div>
        </main>
    </div>
    <?php require 'components/footer.php' ?>
</body>

</html>