<?php
    try{
        if(! $_GET['id'])
            echo("<script>location.href = 'index.php';</script>");
        $id = $_GET['id'];
        $statement = $db->prepare("SELECT * FROM property WHERE id = '$id'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND status='1' ORDER BY id DESC LIMIT 5;");
        $statement->execute();
        $latest = $statement->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $row){
            $user = $row->user;
            $userType = $row->userType;
            $title = $row->title;
            $text = $row->text;
            $area = $row->area;
            $areaFlag = $row->areaFlag;
            $price = $row->price;
            $priceFlag = $row->priceFlag;
            $priceType = $row->priceType;
            $priceTypeFlag = $row->priceTypeFlag;
            $division = $row->division;
            $divisionFlag = $row->divisionFlag;
            $district = $row->district;
            $districtFlag = $row->districtFlag;
            $city = $row->city;
            $cityFlag = $row->cityFlag;
            $ward = $row->ward;
            $wardFlag = $row->wardFlag;
            // $location = $row->location;
            // $locationFlag = $row->locationFlag;
            $postType = $row->postType;
            $category = $row->category;
            $frontRoad = $row->frontRoad;
            $frontRoadFlag = $row->frontRoadFlag;
            $balconie = $row->balconie;
            $balconieFlag = $row->balconieFlag;
            $floor = $row->floor;
            $floorFlag = $row->floorFlag;
            $room = $row->room;
            $roomFlag = $row->roomFlag;
            $hostelType = $row->hostelType;
            $hostelTypeFlag = $row->hostelTypeFlag;
            $seat = $row->seat;
            $seatFlag = $row->seatFlag;
            $bathroom = $row->bathroom;
            $bathroomFlag = $row->bathroomFlag;
            $advancePrice = $row->advancePrice;
            $advancePriceFlag = $row->advancePriceFlag;
        }

        $statement = $db->prepare("SELECT path FROM photos WHERE id = '$id' AND user = '$user'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $row){
            $path = $row->path;
        }

        $statement = $db->prepare("SELECT phone FROM users WHERE id = '$user'");
        $statement->execute();
        $phone = $statement->fetchAll(PDO::FETCH_OBJ);

        foreach($phone as $row){
            $phone = $row->phone;
        }

        if($category === 'plot')
            $category = 'Plot';
        else if($category === 'apartment')
        $category = 'Apartment';
        else if($category === 'independentFloor')
        $category = 'Independent Floor';
        else if($category === 'independentHouse')
        $category = 'Independent House';
        else if($category === 'agriLand')
        $category = 'Agri Land';
        else if($category === 'shopShowroom')
        $category = 'Shop / Show Room';
        else if($category === 'officeSpace')
        $category = 'Office / Space';
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>