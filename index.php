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

    $parkingStatus = '';

    foreach ($hotels as $singleHotel){
        if ($singleHotel['parking'] === true) {
            $parkingStatus = 'yes';
        }else{
            $parkingStatus = 'no';
        }
    }
?>

<h1 class="text-align-center">
    Hotels
</h1>

<form method="get">
    <label for="parking">Parking:  </label>
    <input type="radio" name="parking" id="parking" value="yes">
    <label for="parkingYes">Yes</label>
    <input type="radio" name="parking" id="parking" value="no">
    <label for="parkingNo">No</label>

    <br>


    <label for="vote">Vote</label>
    <select name="vote" id="vote">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</form>


<table class="table text-align-center">
    <thead>
        <tr>
            <th scope="col">Hotel's name</th>
            <th scope="col">Hotel's Description</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to center</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($hotels as $singleHotel) {
            echo '<tr>';
                echo '<td>' . $singleHotel['name'] . '</td>';
                echo '<td>' . $singleHotel['description'] . '</td>';
                echo '<td>' . $singleHotel['vote'] . '</td>';
                echo '<td>' . $singleHotel['distance_to_center'] . ' Km' . '</td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>


</body>
</html>
