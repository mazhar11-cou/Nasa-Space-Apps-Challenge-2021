<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heat Warning</title>
    <script src="https://kit.fontawesome.com/972c99837c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
$lat = $geo["geoplugin_latitude"];
$lon = $geo["geoplugin_longitude"];?>

<div class="form">
<p class="getLocation">Your location details is recorded below <i class="fas fa-map-marker-alt"></i></p>
  <form action="img_upload.php">
      <label for="lat">Latitude</label>
      <input type="text" name="latitude"  id="lat" value=<?=$lat;?>>

      <label for="lon">Longitude</label>
      <input type="text" name="longitude" id="lon" value=<?=$lon;?>>
      
      <button type="submit" class="submit">Click to upload image</button>

  </form>  

</div>
<?php include "footer.php";?>
   
</body>
</html>