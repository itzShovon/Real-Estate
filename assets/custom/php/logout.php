<?php
    try{
        session_start();
        $_SESSION['flag'] = 0;
        session_destroy();
        echo("<script>location.href = '../../../index.php';</script>");
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>