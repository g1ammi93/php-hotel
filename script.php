<?php
require 'data/data.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Hotel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
<h2>Filtra gli Hotel</h2>
  <form method="GET" action="">
  <div class="mb-3">
    <label for="voto" class="form-label">Voto Minimo</label>
    <input type="number" class="form-control" id="voto" name="voto" min="1" max="5" >
  </div>
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="hotelparking"name="hotelparking" >
  <label class="form-check-label" for="hotelparking">L'Hotel ha il parcheggio</label>
</div>
  <button type="submit" class="btn btn-primary my-3">Filtra</button>
</form>




    <h1 class="mt-5">Hotels</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance from center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) {
                
                if(isset($_GET['voto']) && isset($_GET['hotelparking'])) {
                    if ($hotel['vote'] >= $_GET['voto']) {
                        if ($hotel['parking'] == 'on' && $hotel['parking']) {
                            printHotel($hotel);
                        }
                    }
                } else if(isset($_GET['hotelparking'])) {

                    if ($hotel['parking'] == 'on' && $hotel['parking']) {
                        printHotel($hotel);
                }
            } else if(isset($_GET['voto'])) {
                if ($hotel['vote'] >= $_GET['voto']) {
                    printHotel($hotel);
            }
         } else {
                printHotel($hotel);
            
       } 
    }?>
        </tbody>
    </table>
  </div>
</body>
</html>
