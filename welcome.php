<?php
include 'dbh.php';
$sql3="SELECT * FROM `map`  ORDER BY `id` DESC";
$query1=mysqli_query($conn,$sql3);
 ob_clean();

$findme = "Physical";

$pmac = strpos($mycom, $findme);

$mac=substr($mycom,($pmac+36),17);
 /* {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($query1);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($query1);
  }*/
// mimic a result array from MySQL
$result = array(array('latitude'=>$lat,'longitude'=>$lon));

?>


<html>
        <head>
        
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!doctype html>
         </head>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="index.html" class="navbar-brand" href="#">ABA Smartbags</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="Search.php">Search Tourist Locations</a></li>
              <li><a href="welcome.php">Bag_Track</a></li>
              <li><a href="#">Items Status</a></li>
            </ul>
          </div>
        </nav><br>
        <br>
        <?php include 'clock.php';?>
           <div class="main">
                 
                   <div style="background-color:#FFFF;margin-left:7.5%;margin-right:7%">
                        <form method="post">
                          <div class="container table-responsive">
                           <center><h1 style="font-family: Times New Roman, Times, serif">Bag's Location</h1></center>
                             <table class="table table-hover table-responsive table-striped">
                                <thead style="background-color:#6C7AE0">
                                <tr >
                                    <td  style="border-radius: 12px 0 0 0"><center>Latitude</center></td>
                                    <td><center>Longitude</center></td>
                                    <td><center>Device_id</center></td>
                                    <td><center>Date</center></td>
                                    <td ><center>Time</center></td>  
                                    <td style="border-radius: 0 12px 0 0"><center>CARD_NO</center></td> 
                                </tr>
                                </thead>
                               
                                <?php while($query=mysqli_fetch_array($query1)){  ?>
                                 <tbody>
                                  <tr>
                                    <td> <a name="latitude"><?php echo $query['Lat'] ?></a></td>
                                    <td> <a name="longitude"><?php echo $query['Lon'] ?></a></td>
                                    <td> <a name="Device"><?php echo $query['Device'] ?></a></td>
                                    <td> <a name="date" ><?php echo $query['Date'] ?></a></td>
                                    <td> <a name="time" ><?php echo $query['Time'] ?></a></td>
                                    <td> <a name="card_no" ><?php echo $query['CARD_NO'] ?></a></td>
                                    
                                  </tr>
                                  </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </form>
                     </div>
                 </div>
           
        </html>
<?php

include 'google_map.php';
?>

