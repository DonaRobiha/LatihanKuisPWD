<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(138, 76, 123);
            font-family: Arial, sans-serif;
            height: 100vh; 
            display: flex;
            justify-content: center; 
            align-items: center; 
            margin: 0; 
        }
        .card {
            max-width: 600px;
            background-color:rgb(235, 196, 225); 
            color: black; 
            margin: auto;
            margin-top: 50px;
            padding: 20px; 
            display: flex;
            align-items : center;
            justify-content :space-between;
        }
       
        .season-image {
            width: 160px;
            height: 200px;
            margin-top: 60px; 
            object-fit: cover;
            border-radius:20px;
            margin-right: 100px;
            max-width: 600px;
        }

        .btn-back {
            margin-top: 20px;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        .season-title {
            text-align: center;
            margin-bottom: 10px;
            font-size: 30px; 
            font-weight: bold; 
        }

        
        .season-winter-text {
            color: rgb(225, 20, 236) !important;
        }

        .season-spring-text {
            color: rgb(95, 204, 88) !important; 
        }

        .season-summer-text {
            color: rgb(255, 123, 23) !important;
        }

        .season-autumn-text {
            color: rgb(161, 42, 153) !important; 
        }

        .winter-btn {
            background-color: rgb(225, 20, 236);
        }

        .spring-btn {
            background-color: rgb(95, 204, 88); 
        }

        .summer-btn {
            background-color: rgb(255, 123, 23);
        }

        .autumn-btn {
            background-color: rgb(161, 42, 153); 
        }

        .card {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
  </head>
  <body>
    
    <?php
    $bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
    $season = '';
    $description = '';
    $image = '';
    $monthRange = '';
    $btnClass = ''; 

    if ($bulan) {
        switch ($bulan) {
            case 'December':
            case 'January':
            case 'February':
                $season = "Winter";
                $description = "Winter serves as a time for reflection and introspection, where the silence of snow offers us a chance to contemplate the warmth within our hearts.";
                $image = "winter.png";
                $monthRange = "December - February";
                $btnClass = "winter-btn";
                break;
            case 'June':
            case 'July':
            case 'August':
                $season = "Summer";
                $description = "Summer marks a time of energy and freedom, where the shining sun encourages us to celebrate life and our presence in this world.";
                $image = "summer.png";
                $monthRange = "June - August";
                $btnClass = "summer-btn";
                break;
            case 'September':
            case 'October':
            case 'November':
                $season = "Autumn";
                $description = "Autumn invites us to reflect on the cycles of life, as the falling leaves teach us the art of letting go and embracing change.";
                $image = "autumn.png";
                $monthRange = "September - November";
                $btnClass = "autumn-btn";
                break;
            case 'March':
            case 'April':
            case 'May':
                $season = "Spring";
                $description = "Spring symbolizes hope and renewal, reminding us that life always finds a way to return with each blooming flower.";
                $image = "spring.png";
                $monthRange = "March - May"; 
                $btnClass = "spring-btn";
                break;
            default:
                $season = "Unknown";
                $description = "Sorry, we could not determine the season.";
                $image = "default.png";
                $monthRange = "";
                $btnClass = "winter-btn"; 
        }
    }
    ?>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src=" <?php echo $image; ?>" class="season-image" alt="Season image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title season-title">
                        It's <span class="season-<?php echo strtolower($season); ?>-text"><?php echo $season; ?></span> Time!
                    </h5>
                    
                    <?php if ($monthRange): ?>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $monthRange; ?></small></p>
                    <?php endif; ?>

                    <p class="card-text"><?php echo $description; ?></p>
                    <a href="kuis.html" class="btn-back <?php echo $btnClass; ?>">Back To Menu</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
