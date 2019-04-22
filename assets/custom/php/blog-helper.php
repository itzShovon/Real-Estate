<?php
    try{
        $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND status='1' ORDER BY id DESC LIMIT 5;");
        $statement->execute();
        $totalRow = $statement->rowCount();
        $totalPage = ceil($totalRow / 5);
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        $page = '';
        if (isset($_GET["page"])){
            $page = $_GET["page"];
            $skip = $page * 5;
            
            $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND status='1' ORDER BY id DESC LIMIT 5 OFFSET $skip;");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            $page = 0;
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }

    function categoryTest($temp){
        if($temp === 'plot')
            echo 'Plot';
        else if($temp === 'apartment')
            echo 'Apartment';
        else if($temp === 'independentFloor')
            echo 'Independent Floor';
        else if($temp === 'independentHouse')
            echo 'Independent House';
        else if($temp === 'agriLand')
            $category = 'Agri Land';
        else if($temp === 'shopShowroom')
            echo 'Shop / Show Room';
        else if($temp === 'officeSpace')
            echo 'Office / Space';
    }

    try{
        if($page > 0)
            $previous = $page - 1;
        else
            $previous = 0;
        $next = $page + 1;
        if(isset($_POST['Page'])){
            if($_POST['page']){
                $page = $_POST['page'];
                echo("<script>location.href = 'blog.php?page=$page';</script>");
            }
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>