<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanakh</title>
    <link rel="stylesheet" href="main.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>
</head>

<body class="flex flex-col min-h-screen font-sans text-base leading-normal text-slate-600">
    <?php include './header.php'; ?>

    <?php
        $books = array(
            'Torah' => './torah/torah.php',
            'Nevi\'im - Prophètes' => './prophetes/prophetes.php',
            'Ketouvim - Hagiographes' => './hagiographes/hagiographes.php');
    ?>

    <main class="flex-1 w-screen max-w-[80ch] px-4 mx-auto my-clamp">
        <h1 class="mb-8 text-4xl">Tanakh</h1>

        <?php foreach ($books as $key =>  $book): ?>
            <section class="mb-10">
                <h2 class="pb-4 mb-4 border-b border-gray-200 text-2xl"><?php echo $key  ?></h2>
                <?php include ($book); ?>
            </section>
        <?php endforeach ?>

    </main>

    <?php include './footer.php'; ?>
</body>
</html>