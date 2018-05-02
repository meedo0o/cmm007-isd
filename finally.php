<?php

include 'connect.php';

if(isset($_SESSION['username'])) {
    echo "this is very secure area!";


    ?>
    <!DOCTYPE html>
    <html>
    <body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    </body>
    </html>

    <?php
} else {
    echo "you need to login first";
}


    ?>