<?php

 function kh_getUserIP(){
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        return $ip;
    }



// this code block contains some test stuff
include 'dbh.php';

$ip= kh_getUserIP();
echo $ip,"<br>";
date_default_timezone_set('Asia/Kolkata');

$d=date('d-m-Y').'<br/>';
$e=date('H:i:s');
echo $d;
echo $e;

$lat=$_REQUEST['lat'];


$lon=$_REQUEST['lng'];
$card_no=$_REQUEST['card_no'];

ob_start();

system('ipconfig /all');


    $mycom=ob_get_contents();



    ob_clean();

$findme = "Physical";

$pmac = strpos($mycom, $findme);

$mac=substr($mycom,($pmac+36),17);



$sql= "INSERT INTO `map` (`Lon` , `Lat`, `Date`, `Time` , `MAC`, `CARD_NO`) VALUES ('$lon', '$lat', '$d', '$e', '$mac','$card_no')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
<!doctype html>
<html>
    <head>

       
    </head>
    <body onload="initialize()">
    <center><h1>Your Location</h1></center>
   
       
    </body>
</html>



   