
<?php


$conn =mysqli_connect("localhost", "root", "", "army");
if ($conn === false){
    die('check the connection'.mysql_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO camp VALUES('$email', '$password')";

if(mysqli_query($conn,$sql)){

    echo file_get_contents("index.php");
}
else{
    echo "failed";
}
mysqli_close($conn);
?>