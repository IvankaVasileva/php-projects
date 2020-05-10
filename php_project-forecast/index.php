<?php 


error_reporting(E_ALL ^ E_NOTICE);
include 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>
            Weather Forecast
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
        <div class="jumbotron jumbotron-fluid center_div">
            <div class="container color_links_menu">
            <?php
                createMenu($lnks_menu_array); //create menu with function in functions.php
            ?>
                <h1 class="display-3">Weather forecasts for <span class="span_italic">thousands of locations</span> around the world</h1>
               
               <!-- form select city -->
                <form class="padding_row">
                    <input type="text" name="city" placeholder="Enter a city">
                    <input type="submit" name="submit" value="Search">
                </form>
                
                <!-- Modal -->
                
                <div class="modal show" id="exampleModal" tabindex="-1"  data-show="true" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Try again!
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                <!-- scripts for the globe -->
                <script src="https://d3js.org/d3.v3.min.js"></script>
                <script src="https://d3js.org/topojson.v1.min.js"></script>
                <script src="app.js"></script>
            </div>
         </div>

        <?php            
            selectedCity($city); // form select city in functions.php            

            $isFieldEmpty = $_GET["isFieldEmpty"];

            if ($isFieldEmpty) {
                // echo function_alert("We welcome the New World");
                echo '
                <script> 
                    $("#exampleModal").modal("show");
                 </script>
                ';
            }
        ?>

	</body>
</html>