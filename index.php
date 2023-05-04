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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Hotels</title>
</head>

<body>
  <div class="container text-center">
    <div class="row pt-5 d-flex">
      <?php foreach ($hotels as $hotel) { ?>
        <div class="col-3">
          <div class="card">
           <h3> <?php echo $hotel['name'] ?></h3>
            <h4><?php echo $hotel['description'] ?></h4>
              <?php if($hotel['parking']) {?>
                <p>Parcheggio disponibile</p>
                <?php } else{ ?>
                  <p>Parcheggio non disponibile</p>
                  <?php } ?>
            <p class="fw-bolder">Valutazione media:</p><p><?php echo $hotel['vote'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</body>

</html>