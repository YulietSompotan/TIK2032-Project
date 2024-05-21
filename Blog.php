<?php
require 'function.php';
$blog = query("SELECT * FROM blog");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styleblog.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="moving-text">
                 Portofolio
            </h1>
            <ul>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <h2 class="blog">ARTIKEL</h2>

<table>
    <?php foreach ( $blog as $y ): ?>
    <tr>
        <td>
            <hr>
            <h1 class="judul"><?= $y["judul"]; ?></h1>
            <hr>
            <p class="paragraph">
            <?= $y["paragraf"]; ?>
            </p>
            <h1 class="Kesimpulan">Kesimpulan</h1>
            <p>
            <?= $y["kesimpulan"]; ?> <br><br>
            <a class="hyperlink" href=<?= $y["hyperlink"]; ?>>silakan baca di sini</a>
            </p>

        </td>
    </tr>
    <?php endforeach; ?>
 
<footer>
    <p>Hak Cipta &copy; 2024 Yuliet Sompotan</p>
   </footer>
   <script src="scriptblog.js"></script>
</body>
</html>
