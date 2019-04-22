<?php
    include 'assets/custom/php/config.php';
    if($_SESSION['flag'] != '1'){
        $_SESSION['flag'] = '0';
        echo("<script>location.href = 'index.php';</script>");
    }

    try{
        if(($_SESSION['type'] === 'users') && ($_SESSION['flag'] === '1')){
            $id = "";
            $name = "";
            $password = "";
            $region = "";
            $district = "";
            $city = "";
            $ward = "";
            $photo = "";
            $status = "";
            $flag = "";
            
            $id = $_SESSION['id'];


            $password = $_SESSION['password'];
            $statement = $db->prepare("SELECT * FROM users WHERE flag = '1' AND status = '1' AND id='$id'");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);

            foreach($result as $row){
                if(($id === "$row->id") && ($password === "$row->password")){
                    $id = $row->id;
                    $name = $row->name;
                    $password = $row->password;
                    $region = $row->region;
                    $district = $row->district;
                    $city = $row->city;
                    $ward = $row->ward;
                    $photo = $row->photo;
                    $status = $row->status;
                    $flag = $row->flag;
                }
            }

            if(isset($_POST['update'])){
                if(isset($_POST['name'])){
                    $name = $_POST['name'];
                }
                if(isset($_POST['region'])){
                    $region = $_POST['region'];
                }
                if(isset($_POST['district'])){
                    $district = $_POST['district'];
                }
                if(isset($_POST['city'])){
                    $city = $_POST['city'];
                }
                if(isset($_POST['ward'])){
                    $ward = $_POST['ward'];
                }


                $newFile = $photo;
                $target_dir = "images/users/";
                $target_file = $target_dir . basename($_FILES["photo"]["name"]);



                if($target_file != $target_dir){
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
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
                }
                // photo upload

                if(($_POST['oldPassword']) != ""){
                    if($_POST['oldPassword'] === "$password"){
                        if($_POST['oldPassword'] != $_POST['newPassword']){
                            if($_POST['newPassword'] != "")
                                $password = $_POST['newPassword'];
                            $_SESSION['password'] = $password;
                        }
                        $sql = "UPDATE users SET name=?, password=?, region=?, district=?, city=?, ward=?, photo=? WHERE id='$id'";
                        $db->prepare($sql)->execute([$name, $password, $region, $district, $city, $ward, $newFile]);
                        // $sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
                        // $db->prepare($sql)->execute([$name, $surname, $sex, $id]);
                        
                        $message = "Thanks! modification successfully.";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        echo("<script>location.href = 'dashboard.php';</script>");
                    }
                }
                else{
                    $message = "You must have to put old password!!!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>