<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="form">

    <form action="show.php">
        <h3>Select images to upload...</h3>
        <input type="file" name="img1">
        <input type="file" name="img2">
        <input type="file" name="img3">
        <input type="file" name="img4" id="">
        <input type="file" name="img5" id="">
        <input type="hidden" name="latitude" value=<?=$_GET['latitude'];?>>
         <input type="hidden" name="longitude" value=<?=$_GET['longitude'];?>>

        <button type="submit" class="submit">Upload Images</button>
    </form>

</div>
<?php include "footer.php";?>
</body>
</html>