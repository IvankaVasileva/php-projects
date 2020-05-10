<?php include 'functions.php';

error_reporting(E_ALL ^ E_NOTICE);?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>
            Weather Forecast / Varna
    	</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Gelasio:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
    </head>	
    <style>
	
	</style>
	<body>
        <div class="container-fluid center_div">
        <a href="/php_project-forecast">Home</a>
        <h1 class="city_title"><?php echo $_GET["c"] ?>, Bulgaria</h1>
        </div>
    <div class="jumbotron jumbotron-fluid center_div container-bg">
        <div class="container">
           <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <form class="form_varna">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" value="option1"  onchange="this.form.submit()"> At the moment
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" value="option2" onchange="this.form.submit()"> 12 hours
                </label>
                 <!-- because of the refresh from At the moment to 12 hours the info ($city) will be lost - we do not have session-->
                <input type="hidden" name="c" value="<?php echo $_GET['c'] ?>">
            </form>
            </div>
        </div>
        
        <?php
        // function from functions.php select At the moment or 12 hours
            selectedDay($options);
        ?>
    </div>


    </body>


    </html>