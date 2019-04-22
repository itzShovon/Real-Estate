<?php
    if($_SESSION['flag'] != '1'){
        $_SESSION['flag'] = '0';
        echo("<script>location.href = 'index.php';</script>");
    }
    try{
        if(($_SESSION['type'] === 'users') && ($_SESSION['flag'] === '1')){
            $id = $_SESSION['id'];
            $password = $_SESSION['password'];
            $statement = $db->prepare("SELECT * FROM users WHERE flag = '1' AND status = '1' AND id='$id'");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);

            foreach($result as $row){
                if(($id === "$row->id") && ($password === "$row->password")){
                    $id = $row->id;
                    $name = $row->name;
                    $email = $row->email;
                    $phone = $row->phone;
                    $password = $row->password;
                    $region = $row->region;
                    $district = $row->district;
                    $city = $row->city;
                    $ward = $row->ward;
                    $photo = $row->photo;
                    $status = $row->status;
                    $flag = $row->flag;

                    // echo "<script type='text/javascript'>alert('Condition filled');</script>";
                }
            }
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>