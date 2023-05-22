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

    $parkSel = isset($_GET['parking']);

    // var_dump( $parkSel );


    $hotelsSecond = $hotels;

    if( isset($_GET['parking']) && $_GET['parking'] == 'parkYes' ){

        var_dump('ciaoo');
        
        $arrayParking = [];

        foreach( $hotels as $elem){
            if( $elem['parking'] == true ){
                $arrayParking[] = $elem;
            }
                
        }

        

        $hotelsSecond = $arrayParking;
    }
    
    var_dump( $hotelsSecond );

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Hotels</title>
</head>
<body>

    <div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Votes</th>
                    <th scope="col">Distance to downtown (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $hotelsSecond as $elem){?>
                    <tr>
                      <th scope="row"><?php echo $elem['name'] ?></th>
                      <td><?php echo $elem['description'] ?></td>
                      <td><?php echo $elem['vote'] ?></td>
                      <td><?php echo $elem['distance_to_center'] . 'km' ?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>

        

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>