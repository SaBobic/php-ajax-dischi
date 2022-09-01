<?php
include 'includes/discs.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css' integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center">
        <nav class="d-flex align-items-center">
            <a href="#">
                <img src="img/spotify-logo-png-7053.png" alt="Spotify Logo">
            </a>
        </nav>
        <div>
            <select name="" id="">
                <option value="">AAAAA</option>
                <option value="">AAAAA</option>
                <option value="">AAAAA</option>
            </select>
        </div>
    </header>
    <!-- Main -->
    <main class="d-flex align-items-center">
        <div class="container">
            <div class="row g-3">
                <?php foreach($discs as $disc) : ?>
                    <div class="col-2">
                        <div class="album p-3 text-center">
                            <img <?= "src='{$disc['poster']}' alt='{$disc['title']}'" ?> class="img-fluid mb-3">
                            <h4><?= $disc['title'] ?></h4>
                            <div class="author"><?= $disc['author'] ?></div>
                            <div class="year"><?= $disc['year'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    
</body>
</html>