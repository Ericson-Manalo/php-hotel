<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Hotels</title>
</head>
<body>

</body>
</html>


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

<h1 class="text-align-center">
    Hotels
</h1>

<table class="table table-dark">
    <tbody>
        <tr>
            <th scope="col">Hotel's name</th>
            <?php foreach ($hotels as $singleHotel) { ?>
                <td>
                    <?php echo $singleHotel['name']?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <th scope="row">Hotel's Description</th>
            <?php foreach ($hotels as $singleHotel) { ?>
                <td>
                    <?php echo $singleHotel['description']?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <th scope="row">Vote</th>
            <?php foreach ($hotels as $singleHotel) { ?>
                <td>
                    <?php echo $singleHotel['vote']?>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <th scope="row">Distance to center</th>
            <?php foreach ($hotels as $singleHotel) { ?>
                <td>
                    <?php echo $singleHotel['distance_to_center']?>
                </td>
            <?php } ?>
        </tr>
    </tbody>
</table>
