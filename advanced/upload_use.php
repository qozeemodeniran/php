<?php
$target_directory = "./uploads/";
$target_file = $target_directory . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// checking if file is an actual or fake image
if(isset($_POST["submit"])) {
    $check_file = getimagesize(($_FILES["myfile"]["tmp_name"]));
    if($check_file != false) {
        echo "File is an actual image - " . $check_file["mime"] . ".<br><br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image. <br><br>";
        $uploadOk = 0;
    }
}

// checking if file already exists in the uploads directory
if (file_exists(($target_file))) {
    echo "Ops..., file already exists <br><br>";
    $uploadOk = 0;
}

// checking file size is greater that 500 kilo byte
if($_FILES["myfile"]["size"] > 500000) {
    echo "Ops..., selected file is too large. <br><br>";
    $uploadOk = 0;
}

// limiting the type/kind/format of file users can upload
if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
    echo "Ops..., you can only upload a PNG, JPG, JPEG, and GIF file. <br><br>";
    $uploadOk = 0;
}

// chekcing if uploadOk is set to zero 'cos of error
if ($uploadOk == 0) {
    echo "Ops..., your file upload was not successful. <br><br>";
} else {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
        echo "Your file " . htmlspecialchars(basename($_FILES["myfile"]["name"])) . " was successfully uploaded. <br><br>";
    } else {
        echo "Ops..., an error occured while trying to upload your file. <br><br>";
    }
}
?>