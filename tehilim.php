<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tehilims</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="styles.css">
    <link href="./favicon.ico" rel="icon" type="image/x-icon">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>
</head>

<body class="flex flex-col min-h-screen font-sans text-base leading-normal text-slate-600">
    <?php include './header.php'; ?>

    <main class="flex-1 w-screen max-w-[80ch] px-4 mx-auto my-clamp">

        <svg xmlns="http://www.w3.org/2000/svg" width="600" height="692.82" class="maguen-david"><path d="M 47.631413,492.11477 552.36859,492.11491 300,54.999953 Z M 300,637.81981 552.36851,200.70493 47.631403,200.70481 Z" fill="none" stroke="#005EB8" stroke-width="55"/></svg>

        <div id="select"><?php include './select.php'; ?></div>
        <div id="custom"></div>

        <div class="sub-navigation">
            <a href="#tehilimBlock" title="Hébreu" class="sublink sublink-psaume active">Hébreu</a>
            <a href="#traductionBlock" title="Français" class="sublink sublink-traduction">Français</a>
        </div>

        <div id="content"></div>

    </main>

    <footer class="flex justify-center items-center h-14 py-2.5 px-4 bg-blueIsrael">
        <?php include './select.php'; ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="app.js"></script>
</body>

</html>