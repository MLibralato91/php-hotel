<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => 'true',
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => 'true',
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => 'false',
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => 'false',
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => 'true',
    'vote' => 2,
    'distance_to_center' => 50
  ],

];
if(!empty($_GET['parking'])){
  $star = $_GET['stars'];
  $park = $_GET['parking'];
  $filteredHotels=[];

  foreach($hotels as $hotel){
    if($hotel['parking'] == $park && $hotel['vote'] ==  $star){
      $filteredHotels[] = $hotel;
    }
  }
}else{ 
  $filteredHotels = $hotels;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Hotels</title>
</head>

<body>
  <div class="container">
    <div class="row pt-5">
      <div class="col-4">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="parking">
            <option value="">Ti serve un posto auto?</option>
            <option value="true">Si</option>
            <option value="false">No</option>
          </select>
          
          <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="stars">
            <option selected>Selezione le stelle che desideri</option>
            <option value="1">1 Stella</option>
            <option value="2">2 Stelle</option>
            <option value="3">3 Stelle</option>
            <option value="4">4 Stelle</option>
            <option value="5">5 Stelle</option>
          </select>
          <button type="submit" class="btn btn-primary">Cerca</button>
        </form>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row pt-5 d-flex">
      
    <?php foreach ($filteredHotels as $hotel) { ?>
        <div class="col-3 pb-4">
          <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-header">
              <h3 class="card-title"> <?php echo $hotel['name'] ?></h3>

            </div>
            <div class="card-body">

              <h4 class="card-text"><?php echo $hotel['description'] ?></h4>


              <?php if ($hotel['parking'] == 'true') { ?>
                <p class="card-text">Parcheggio disponibile</p>
              <?php } else { ?>
                <p class="card-text">Parcheggio non disponibile</p>
              <?php } ?>

              <p class="fw-bolder">Valutazione: <?php echo $hotel['vote'] ?> <i class="fa-solid fa-star"></i></p>

            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</body>

</html>