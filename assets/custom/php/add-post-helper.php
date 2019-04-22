<?php
    if($_SESSION['flag'] != '1'){
        $_SESSION['flag'] = '0';
        echo("<script>location.href = 'index.php';</script>");
    }

// here user for user id and id for post id

    try{
        if(($_SESSION['type'] === 'users') && ($_SESSION['flag'] === '1')){
            $user = $_SESSION['id'];
            $id = 0;
            $statement = $db->prepare("SELECT id FROM photos ORDER BY id ASC");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);

            foreach($result as $row){
                $id = $row->id;
            }
            ++$id;
            if(isset($_POST['Submit'])){
                $userType = $_POST['userType'];
                $title = $_POST['title'];
                $text = $_POST['text'];
                $area = $_POST['area'];
                $price = $_POST['price'];
                $priceType = $_POST['priceType'];
                $division = $_POST['division'];
                $district = $_POST['district'];
                $city = $_POST['city'];
                $ward = $_POST['ward'];
                // $location = $_POST['location'];
                $postType = $_POST['postType'];
                $category = $_POST['category'];
                $frontRoad = $_POST['frontRoad'];
                $balconie = $_POST['balconie'];
                $floor = $_POST['floor'];
                $room = $_POST['room'];
                $hostelType = $_POST['hostelType'];
                $seat = $_POST['seat'];
                $bathroom = $_POST['bathroom'];
                $advancePrice = $_POST['advancePrice'];

                for($i = 0; $i < count($_FILES["photo"]["name"]); $i++){
                    // $imageFileType = strtolower(pathinfo(basename($_FILES["photo"]["name"][$i]),PATHINFO_EXTENSION));
                    $imageFileType = "jpg";

                    $tempPhoto = $_FILES["photo"]['tmp_name'][$i];
                    $photoName = $_FILES["photo"]["name"][$i];
                    $photoType = $_FILES["photo"]["type"][$i];
                    // $photoPath = "images/properties/".$photoName;

                    $photoPath = "images/properties/"."$user"."-"."$id"."-".$i.".".$imageFileType;
                    
                    if(move_uploaded_file($tempPhoto, $photoPath)){
                        $statement = $db->prepare("INSERT INTO photos(
                            user,
                            id,
                            path,
                            flag,
                            status
                        )
                        VALUES (?,?,?,?,?)");
                        $statement->execute(array(
                            $user,
                            $id,
                            $photoPath,
                            '1',
                            '1'
                        ));
                        $posted = 1;
                    }
                    
                }


                $statement = $db->prepare("INSERT INTO property(
                    user,
                    title,
                    text,
                    userType,
                    id,
                    area,
                    areaFlag,
                    price,
                    priceFlag,
                    priceType,
                    priceTypeFlag,
                    division,
                    divisionFlag,
                    district,
                    districtFlag,
                    city,
                    cityFlag,
                    ward,
                    wardFlag,
                    -- location,
                    -- locationFlag,
                    postType,
                    category,
                    frontRoad,
                    frontRoadFlag,
                    balconie,
                    balconieFlag,
                    floor,
                    floorFlag,
                    room,
                    roomFlag,
                    hostelType,
                    hostelTypeFlag,
                    seat,
                    seatFlag,
                    bathroom,
                    bathroomFlag,
                    advancePrice,
                    advancePriceFlag,
                    flag,
                    status,
                    ad
                )
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $statement->execute(array(
                    $user,
                    $title,
                    $text,
                    $userType,
                    $id,
                    $area,
                    '1',
                    $price,
                    '1',
                    $priceType,
                    '1',
                    $division,
                    '1',
                    $district,
                    '1',
                    $city,
                    '1',
                    $ward,
                    '1',
                    // $location,
                    // '0',
                    $postType,
                    $category,
                    $frontRoad,
                    '1',
                    $balconie,
                    '1',
                    $floor,
                    '1',
                    $room,
                    '1',
                    $hostelType,
                    '1',
                    $seat,
                    '1',
                    $bathroom,
                    '1',
                    $advancePrice,
                    '1',
                    '1',
                    '1',
                    '1'
                ));



                if($posted == 1){
                    $message = "Posted...";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo("<script>location.href = 'dashboard.php';</script>");
                }
            }
        }
        else {
            $_SESSION['flag'] = '0';
            echo("<script>location.href = 'index.php';</script>");
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>