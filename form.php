<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Form-Hotel</title>
</head>

<body>
    <div class="container mt-3 text-center">
        <h1>Cerca il tuo Hotel</h1>
        <form action="php-hotel.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <select name="nome" id="nome">
                    <option value="nome"></option>

                    <?php foreach ($hotels as $hotel) { ?>
                        <option value="nome"><?php echo $hotel['name'] ?></option>
                    <?php } ?>
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Rating" class="form-label">Rating:</label>
                <input type="number" name="vote">
                <!-- <?php foreach ($hotels as $hotel) { ?>
                    <option value="vote"><?php echo $hotel['vote'] ?> </option>
                <?php } ?> -->
            </div>

            <div class="mb-3">
                <label for="Parking" class="form-label">Parking:</label>
                <input type="checkbox">
            </div>

            <button type="submit" class="btn btn-secondary">Invia</button>
            <button type="reset" class="btn btn-secondary">Cancella</button>
        </form>
    </div>
</body>

</html>