<?php
    $_POST['username'];
    $_POST['passsword'];
    $conn = new mysqli('localhost',root,'','test');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signup(username , password)
        values(?,?)");
        $stmt->blind_param("ss",$username ,$password);
        $stmt->execute();
        echo "signup Success";
        $stmt->close();
        $conn->close();
    }
    
?>