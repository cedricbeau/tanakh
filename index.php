<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanakh</title>
    <link rel="stylesheet" href="main.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.4/build/global/luxon.min.js"></script>
</head>

<body class="flex flex-col min-h-screen pt-14 font-sans text-base leading-normal text-slate-600 overflow-x-hidden">
    <?php include './header.php'; ?>

    <?php
        $books = array(
            'Torah - Les 5 livres de Moïse' => './torah.php',
            'Nevi\'im - Prophètes' => './prophetes.php',
            'Ketouvim - Hagiographes' => './hagiographes.php');
    ?>

    <main class="flex-1 w-screen max-w-[80ch] px-4 mx-auto mb-10">
        <h1 class="my-10 font-serif text-4xl">Tanakh</h1>

        <?php foreach ($books as $key =>  $book): ?>
            <section class="mb-10 last:mb-0">
                <h2 class="pb-4 mb-4 border-b border-slate-200 text-2xl text-slate-400"><?php echo $key  ?></h2>
                <?php include ($book); ?>
            </section>
        <?php endforeach ?>

    </main>

    <?php include './footer.php'; ?>
    <script src="app.js"></script>
</body>
</html>