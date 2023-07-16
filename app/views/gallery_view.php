<!DOCTYPE html>
<html lang="PL">
<head>
    <link rel='stylesheet' href='Files/styles_gallery.css'>
    <link rel='stylesheet' href='Files/styles_all.css'>
    <title>Galleria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Files/jquery-3.6.1.js"></script>
    <script src="Files/jquery-ui.min.js"></script>
    <script src="Files/Scroll.js"></script>
    <script src="Files/All.js"></script>
</head>
<body>
    <?php include "menu_view.php"?>
    <article>
        <header>
            <h2 class="text_gl">Galeria</h2>
        </header>
        <?php include "image_file_view.php"?>
    </article>
    <footer>
        <p>Autor: Dmytro Dzhusov. Temat: Moje hobby</p>
        <p>Rok: 2022. WETI Informatyka</p>
    </footer>
</body>
</html>