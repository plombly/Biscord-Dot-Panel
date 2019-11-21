<?php
require_once('protect-this.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biscord Dot Uploader</title>
</head>
<img src="iconnn.png" alt="Biscord Dot Icon" style="width:120px;height:100px;">
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="myfile" id="fileToUpload">
        <select name="Server">
          <option value="your server name here">Your server name here</option>
        <input type="submit" name="submit" value="Upload File Now" >
    </form>
</body>
<body>
<h3>Under no circumstances, will you upload files to a server that you do not own. Please contact me at (Your discord tag here) if you have obtained the password to enter this site.</h3>
</body>
</html>
