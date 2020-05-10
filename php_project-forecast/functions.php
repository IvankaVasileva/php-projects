<?php
const CURRENT_FOLDER = 'php_project-forecast';


// function create menu
function createMenu($lnks_menu_array){
    $lnks_menu_array = array(
       0  => "Varna"
    );

    $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    //loop for display the correct url's
    foreach($lnks_menu_array as $side=>$direc) {
        if ($direc) {
            if($side == 0) {
                echo '<a href="'.$currentURL.'location.php?c=Varna">'.$direc.' </a>';  
            } else {
                echo "<a href='$currentURL'>$direc </a>"; 
            }
        }
    } 
}

// form select city
function selectedCity($city) {
    $city = $_GET["city"];
    
    if (isset($city)) {
       switch($city) {
            case "Varna":
                header("Location: location.php?c=$city"); // c - paramentar - safe the selected city in the url
                                                          // and pass from index.php to location.php 
            break;

            default:
                header("Location: index.php?isFieldEmpty=true");
        }
    }

}


//-*-**-*-*-***-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--*-

function imageToShow($randValue) {

    if ($randValue <=12) {
        return '<img src="css/images/cloud.png" alt="">';
    }
    else {        
        return '<img src="css/images/sun.png" alt="">';
    }
}

function tabAtTheMoment() {
    $randValue = rand(-10,32);
    echo'
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">At the moment</h4>
        <h6 class="card-subtitle mb-2 text-muted">';
        echo $randValue ."° C";
        echo'</h6>
        <p class="card-text padding_row">';
           echo imageToShow($randValue);
        echo '</p>
    </div>
    </div>';
}


function selectedDay($options) {
    $options = $_GET["options"];
    if(($options == "option1") || ($options == NULL)){
        tabAtTheMoment();
    }
    else if($options == "option2"){
        tab12hours();
    }

}

//-*-**-*-*-***-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*--*-

function createTh(){
    $hours = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    $arrayLength = count($hours);
    $i = 0;
    $temp = '';
    while ($i < $arrayLength)
    {
        $temp .= '<th>' .$hours[$i] . ' </th>';
        $i++;
    }
    return $temp;
}

function createTd(){
    $degrees = array(rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32), rand(-10,32));
    $arrayLength = count($degrees);
    $i = 0;
    $temp = ""; 
    while ($i < $arrayLength)
    {   
        $temp .= '<td>' .$degrees[$i] . "° C" . ' </td>';
        $i++;
    }
    return $temp;
}   


function tab12hours() {
$createTh = createTh();
$createTd = createTd();
    echo "<table class='table'>";

    echo "
        <thead>
        <tr> $createTh
        </tr>
        </thead>
    ";
    
    echo "
    <tbody>
      <tr>
        $createTd
      </tr>
     
    </tbody>
  </table>";
}

?>
