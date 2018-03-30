<?php
include 'dbh.php';



if(isset($_REQUEST['submit'])){
    $city=$_POST['city'];
    $attraction=$_POST['attraction'];
    $sql=" SELECT * FROM search_table WHERE CITY like '%".$city."%' AND ATTRACTION like '%".$attraction."%'";
    $q=mysqli_query($conn,$sql);
}
else{
    $sql="SELECT * FROM search_table";
    $q=mysqli_query($conn,$sql);
}
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
              
              

              
            <form method="post">
            
          <tr>
            <td>City </td>
            <td><input type="text" name="city" value="<?php echo $city;?>" /></td>
            <td>Attraction</td>
            <td><input type="text" name="attraction" value="<?php echo $attraction;?>" /></td>
            <td><input type="submit" name="submit" value=" Search " /></td>
          </tr>
        
        </form>
             
   
            
          </div>
        </nav><br>
        <br>
        
           <div class="main">
                 
                   <div style="background-color:#FFFF;margin-left:7.5%;margin-right:7%">
                        <form method="post">
                          <div class="container table-responsive">
                           <center><h1 style="font-family: Times New Roman, Times, serif">Tourist locations</h1></center>
                             <table class="table table-hover table-responsive table-striped">
                                <thead style="background-color:#6C7AE0">
                                <tr >
                                    <td  style="border-radius: 12px 0 0 0"><center>CITY</center></td>
                                    <td><center>STATE</center></td>
                                    <td><center>ATTRACTION</center></td>
                                    <td><center>NAME</center></td>
                                    <td style="border-radius: 0 12px 0 0"><center>SPECIALITY</center></td>  
                                    
                                </tr>
                                </thead>
                               
                                <?php while($query=mysqli_fetch_array($q)){  ?>
                                 <tbody>
                                  <tr>
                                    <td> <a name="city"><?php echo $query['CITY'] ?></a></td>
                                    <td> <a name="state"><?php echo $query['STATE'] ?></a></td>
                                    <td> <a name="attraction"><?php echo $query['ATTRACTION'] ?></a></td>
                                    <td> <a name="name" ><?php echo $query['NAME'] ?></a></td>
                                    <td> <a name="speciality" ><?php echo $query['SPECIALITY'] ?></a></td>                                    
                                  </tr>
                                  </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </form>
                     </div>
                 </div>
           
        </html>


