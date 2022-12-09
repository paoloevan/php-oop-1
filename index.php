<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';
include __DIR__ . '/db.php';

$genres_1 = new Genres($bb_film['genre']);
$film_1 = new Movie($bb_film['title'], $bb_film['director'], $bb_film['duration'], $bb_film['year'], $genres_1);
var_dump($film_1);

$genres_2 = new Genres($donnie_film['genre']);
$film_2 = new Movie($donnie_film['title'], $donnie_film['director'], $donnie_film['duration'], $donnie_film['year'], $genres_2);
var_dump($film_2);

$film_1->get_film_data();
$film_2->get_film_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <header>
        <h1 class="text-center m-0 py-3">My movie</h1>
    </header>

    <main>
        <div class="row align-items-md-stretch">
            <div class="col">
                <div class=" h-100 p-5 text-white bg-dark border rounded-3">
                    <h2>Cerca i film disponibili</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, magni? Officia eos numquam dolorem quia exercitationem necessitatibus accusamus sint nisi repudiandae iure optio, ea nulla corrupti maxime, in iste suscipit.</p>
                    <button class="btn btn-outline-primary" type="button">Cerca film</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="https://picsum.photos/300/200" alt="">
                        <h3 class="card-title"><?php echo $film_1->title ?></h3>
                        <div class="card-text">Text</div>
                        <div class="card-text">Text</div>
                        <div class="card-text">Text</div>
                        <div class="card-text">Text</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./assets/main.js"></script>
</body>

</html>