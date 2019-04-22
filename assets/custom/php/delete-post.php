<?php
    include'config.php';
    include'session.php';
    try {
        if(($_SESSION['flag'] != '1') && ($_SESSION['status'] != '1')){
            $_SESSION['flag'] = '0';
            $_SESSION['status'] = '0';
            echo "<script type='text/javascript'>alert('Please login first!');</script>";
            echo("<script>location.href = 'index.php';</script>");
        }
    
        $user = $_SESSION['id'];
        $id = $_GET['id'];
        $statement = $db->prepare("SELECT password FROM users where id = '$user'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
    
        foreach($result as $row){
            if($_SESSION['password'] === "$row->password"){
                try{
                    $sql = "DELETE FROM property WHERE id='$id' AND user='$user'";
                    
                    if ($db->exec($sql)) {
                        echo "<script type='text/javascript'>alert('Deleted... LoL');</script>";
                    } else {
                        echo "<script type='text/javascript'>alert('Delete Failed. Please contact admin... LoL');</script>";
                    }
                    
                    echo("<script>location.href = '../../../dashboard.php';</script>");
                }catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    
?>