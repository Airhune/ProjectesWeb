<form enctype="multipart/form-data" name="formulario" action="formulari.php" method="POST">
    <li>
        Nom: <input type="text" name="username"/>
        Email: <input type="text" name="email"/>
        Edat: <input type="text" name="age"/>
        <input type="submit" name="submitf" id="submitf" value="Send"/>
    </li>
    <li>
        Imatge de perfil: <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input type="file" name="myfile"/>
        <input type="submit" name="submit" id="submiti" value="Upload"/>
    </li>
</form>


<?php
if (!empty($_POST['submitf'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $f_age = floatval($age);
    $i_age = intval($f_age);

    if ( (strlen($username) > 20) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || (!is_numeric($age)) || ($f_age - $i_age) || ($i_age < 1 || $i_age > 120) ) {
        //echo "esta mal";
    } else {
        echo 'The username is: ' . $username . '<br/>';
        echo 'The email is: ' . $email . '<br/>';
        echo 'The age is: ' . $age . '<br/>';
    }
}

if(!empty($_FILES['myfile'])) {

    $myFile = $_FILES['myfile'];
    $fileType = exif_imagetype($myFile["tmp_name"]);
    $allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
    $size = getimagesize($myFile["tmp_name"]);
    $width = $size[0];
    $height= $size[1];

    if ($myFile["error"] !== UPLOAD_ERR_OK){
        echo "<p>An error ocurred.</p>";
        exit;
    }

    if (!in_array($fileType, $allowed)) {
        echo "<p>File type is not permitted.</p>";
        exit;
    }

    if ($width > 200 || $height > 200){
        echo "<p>Size is not permitted.</p>";
        exit;
    }

    if ($fileType === 1){
        $name = "profile_picture.gif";
    } else if ($fileType === 2){
        $name = "profile_picture.jpg";
    } else if ($fileType === 3){
        $name = "profile_picture.png";
    }

    $success = move_uploaded_file($myFile["tmp_name"], __DIR__ . '/uploads/' . $name);
    if (!$success){
        echo "<p>Unable to save file.</p>";
        exit;
    } else{
        echo "<p>Your profile image: </p>";
        echo "<img src='uploads/$name' >";
    }

    chmod('uploads/' . $name, 0644);
}
?>