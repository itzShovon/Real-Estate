<?php
    include 'config.php';
    include 'session.php';

    try{
        $do = '';
        $count = 0;
        $price = 999999999;
        $temp = 0;

        $statement = $db->prepare("SELECT * FROM property WHERE ad>0 AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 8;");
        $statement->execute();
        $ad = $statement->fetchAll(PDO::FETCH_OBJ);

        if (isset($_GET["page"])){
            $page = $_GET['page'];
        }
        else{
            $page = 0;
            echo("<script>location.href = 'index.php';</script>");
        }
        if (isset($_GET["act"])){
            $postType = $_GET['act'];
        }
        else{
            echo("<script>location.href = 'index.php';</script>");
        }

        if(isset($_GET['a'])){
            $temp = $_GET['a'];
        }

        if($temp == 1){
            if(isset($_POST['Search'])){
                $do = 'search';

                if(! $_POST['postType']){
                    echo("<script>location.href = 'index.php';</script>");
                }else{
                    $postType = $_POST['postType'];
                    echo("<script>location.href = 'buysalerent.php?act=$postType&page=$page&a=$temp';</script>");
                }
                
                if(! $_POST['category']){
                    echo("<script>location.href = 'index.php';</script>");
                }

                $city = "";

                $city = $_POST['city'];
                $postType = $_POST['postType'];
                if($_POST['price'] == ''){
                    $price = '999999999';
                }else{
                    $price = $_POST['price'];
                }
                $category = $_POST['category'];
                
                $_SESSION['city'] = $_POST['city'];
                $_SESSION['postType'] = $_POST['postType'];
                $_SESSION['price'] = $price;
                $_SESSION['category'] = $_POST['category'];
            }

            $city = $_SESSION['city'];
            $postType = $_SESSION['postType'];
            $price = $_SESSION['price'];
            $category = $_SESSION['category'];

            $skip = 12 * $page;
            $end = $skip + 12;


            // $statement = $db->prepare("SELECT * FROM property WHERE city LIKE '%%' AND price<999999999 AND postType='sell' AND category='apartment' AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 12 OFFSET $skip;");
            
            $statement = $db->prepare("SELECT * FROM property WHERE city LIKE '%$city%' AND price<$price AND postType='$postType' AND category='$category' AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 12 OFFSET $skip;");
            $statement->execute();
            $count = $statement->rowCount();
            $posts = $statement->fetchAll(PDO::FETCH_OBJ);

            $totalPage = ceil($count / 12);
        }


        else if($temp != ''){
            $division = $temp;

            $skip = 12 * $page;
            $end = $skip + 12;


            // $statement = $db->prepare("SELECT * FROM property WHERE city LIKE '%%' AND price<999999999 AND postType='sell' AND category='apartment' AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 12 OFFSET $skip;");
            
            $statement = $db->prepare("SELECT * FROM property WHERE division LIKE '$division' AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 12 OFFSET $skip;");
            $statement->execute();
            $count = $statement->rowCount();
            $posts = $statement->fetchAll(PDO::FETCH_OBJ);

            $totalPage = ceil($count / 12);
        }




        else{
            $skip = 12 * $page;
            $end = $skip + 12;

            $statement = $db->prepare("SELECT * FROM property WHERE postType='$postType' AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 12 OFFSET $skip;");
            $statement->execute();
            $count = $statement->rowCount();
            $posts = $statement->fetchAll(PDO::FETCH_OBJ);
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>