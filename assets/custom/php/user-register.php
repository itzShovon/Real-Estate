<?php
    try{
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                $error_message = ("Give your name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['email'])){
                $error_message = ("Give your email address");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['phone'])){
                $error_message = ("Give your contact no.");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['conformPassword'])){
                $error_message = ("Re-write your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if($_POST['conformPassword'] != $_POST['password']){
                $error_message = ("Password didn't matched");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $region = $_POST['region'];
                $district = $_POST['district'];
                $city = $_POST['city'];
                $ward = $_POST['ward'];


                
                // user id process start
                try{
                    $newFile = "";
                    $id = 0;
                    $statement = $db->prepare("SELECT id FROM users");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                    foreach($result as $row){
                        $id = $row->id;
                    }
                }catch (Exception $ex) {
                    echo $ex->getMessage();
                }

                ++$id;
                // user id process end


                
                
                
//                photo upload
                $target_dir = "images/users/";
                $target_file = $target_dir . basename($_FILES["photo"]["name"]);
                $uploadOk = 1;
                if($target_file != $target_dir){
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
    //                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["photo"]["tmp_name"]);
                    if($check !== false) {
                        $message = "File is an image - " . $check["mime"] . ".";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        $uploadOk = 1;
                    } else {
                        $message = "File is not an image.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        $uploadOk = 0;
                    }
    //                }
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        $message = "Sorry, file already exists. But overwriting";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        $uploadOk = 1;
                    }
                    // Check file size
                    if ($_FILES["photo"]["size"] > 5000000) {
                        $message = "Sorry, your file is too large.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        $message = "Sorry, your file was not uploaded.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        // if everything is ok, try to upload file
                    } else {
                        $newFile = $target_dir.$id.'.'.$imageFileType;
                        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $newFile)) {
                            $message = "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        } else {
                            $message = "Sorry, there was an error uploading your file.";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    }
    //                photo upload
                }
                
                


                if($uploadOk == 1){
                    $statement = $db->prepare("INSERT INTO users(
                        id,
                        name,
                        email,
                        phone,
                        password,
                        region,
                        district,
                        city,
                        ward,
                        photo,
                        status,
                        flag
                    )
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                    $statement->execute(array(
                        $id,
                        $name,
                        $email,
                        $phone,
                        $password,
                        $region,
                        $district,
                        $city,
                        $ward,
                        $newFile,
                        '1',
                        '1'
                    ));
                    $message = "Registration Complete.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
