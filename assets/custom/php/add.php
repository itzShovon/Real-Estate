<?php
    try{
        if(isset($_POST['add'])){
            if(empty($_POST['region'])){
                $error_message = ("Give region name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['district'])){
                $error_message = ("Give district name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['city'])){
                $error_message = ("Give city name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['ward'])){
                $error_message = ("Give ward name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else{
                $region = ucfirst($_POST['region']);
                $district = ucfirst($_POST['district']);
                $city = ucfirst($_POST['city']);
                $ward = ucfirst($_POST['ward']);
                
                $statement = $db->prepare("INSERT INTO location(
                    region,
                    district,
                    city,
                    ward,
                    flag,
                    status
                )
                VALUES (?,?,?,?,?,?)");
                $statement->execute(array(
                    $region,
                    $district,
                    $city,
                    $ward,
                    '1',
                    '1'
                ));
            }
        }

        $statement = $db->prepare("SELECT * FROM location");
        $statement->execute();
        $location = $statement->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>