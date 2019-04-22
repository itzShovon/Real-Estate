<?php
    try{
        if(isset($_POST['login'])){
            if(empty($_POST['email'])){
                $error_message = ("Give your email address");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else if(empty($_POST['password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                $X = 0;
            }
            else{
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                
                $statement = $db->prepare("SELECT * FROM users WHERE flag = '1' AND status = '1'");
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                
                foreach($result as $row){
                    $email = $row->email;
                    $password = $row->password;
                    if(($email == $_POST['email']) && ($password == $_POST['password'])){
                        $_SESSION['type'] = 'users';
                        $_SESSION['flag'] = '1';
			            $_SESSION['status'] = '1';
                        $_SESSION['email'] = $row->email;
                        $_SESSION['password'] = $row->password;
                        $_SESSION['id'] = $row->id;
                        echo("<script>location.href = 'dashboard.php';</script>");
                    }
                }
            }
        }
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
