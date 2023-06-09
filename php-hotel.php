<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>php-hotel</title>
</head>

<body>
    <main>
        <!-- Importare array associativo-->
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
        <!-- Stampare array associativo con ciclo FOR EACH-->
        <!-- NON E' AI FINI DELL'ESERCIZIO, SERVE SOLO A ME  -->


        <!-- Inserire i dati estrapolati all'interno di una table con BOOTSTRAP + relativo Style (magari usare SASS invece di css) -->
        <div class="container">
            <div class="col-12">
                <h1>Elenco degli Hotel</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Distance To Center</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <th scope="col"> <?php echo $hotel['name'] ?> </th>
                            <td scope="row"><?php echo $hotel['description'] ?> </td>
                            <td scope="row"><?php echo $hotel['parking'] ?> </td>
                            <td scope="row"><?php echo $hotel['vote'] ?> </td>
                            <td scope="row"><?php echo $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </main>

</body>

</html>