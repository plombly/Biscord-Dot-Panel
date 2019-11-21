<?php
    require_once('protect-this.php');

    $uploadDirectory = "/biscorddotdirectory/biscord/resources/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['mp3']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $server = $_POST['Server'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $uploadDirectory . $server .'/'. basename($fileName);

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload an mp3";
        }

        if ($fileSize > 209715200) {
            $errors[] = "This file is more than 200MB. Sorry, it has to be less than or equal to 200MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, preg_replace('/ /','',$uploadPath));

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded to ";
                echo "$server";
            } else {
                echo "An error occurred somewhere. Try again or contact me at Plombly#5139";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>
