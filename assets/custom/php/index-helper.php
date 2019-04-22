<?php
    include 'config.php';
    
    try{
        $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND postType='rent' AND status='1' ORDER BY id DESC LIMIT 5;");
        $statement->execute();
        $rent = $statement->fetchAll(PDO::FETCH_OBJ);
    
        $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND postType='sell' AND status='1' ORDER BY id DESC LIMIT 5;");
        $statement->execute();
        $sell = $statement->fetchAll(PDO::FETCH_OBJ);
    
        $statement = $db->prepare("SELECT * FROM property WHERE flag='1' AND status='1' ORDER BY id DESC LIMIT 5;");
        $statement->execute();
        $latest = $statement->fetchAll(PDO::FETCH_OBJ);
    
        $statement = $db->prepare("SELECT * FROM property WHERE userType='developer' AND flag='1' AND status='1' ORDER BY id DESC LIMIT 11;");
        $statement->execute();
        $developer = $statement->fetchAll(PDO::FETCH_OBJ);
    
        $statement = $db->prepare("SELECT * FROM property WHERE ad>0 AND flag='1' AND status='1' ORDER BY ad DESC LIMIT 4;");
        $statement->execute();
        $ad = $statement->fetchAll(PDO::FETCH_OBJ);
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>