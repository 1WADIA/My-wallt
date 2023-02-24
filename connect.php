<?php
$username = $_POST['username'];
$psw = $_POST['psw'];


$coon = new mysql('localhost','root','DataBase_wallt');
if($coon->connect_error){
    die('connection failed : '.%coon->connect_error);
}
else{
    $stmt = $coon->prepare("insert into  registration(username,password)
    values(?,?);")
    $stmt->bind_param("ssi",$username, $password);
    $stmt->execute();
    echo "sigup succeffully..";
    $stmt->close();
    $conn->close();
}


?>