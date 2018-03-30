<?php 
include 'dbh.php';
$sql="select Lat,Lon from map where `id`= '2' ";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);


?>

<style>
#map {
    width:100%;
    height:400px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDB68F0EtIhWBFOYqLnGCzZA4pHn8ftSNM"></script>
<div id="map"></div>
<script>



  function initialize() {
    var myLatlng = new google.maps.LatLng('<?php echo $row['Lat']; ?>','<?php echo $row['Lon']; ?>');
    var myOptions = {
      zoom: 15,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"), myOptions);

    var marker = new google.maps.Marker({
        position: myLatlng, 
        map: map,
        title:"Hello World!"
    });   
  }
google.maps.event.addDomListener(window, 'load', initialize);

</script>


   