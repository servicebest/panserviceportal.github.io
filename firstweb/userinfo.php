<?php 

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfully";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'joinsd');
$name = $_POST['name'];
$userid = $_POST['userid']; 
$password = $_POST['password']; 
$email = $_POST['email']; 
$mobile = $_POST['mobile']; 
$city = $_POST['city']; 
$pan = $_POST['pan']; 
$state = $_POST['state']; 
$pin = $_POST['pin'];

$query = " insert into registration sd (name, userid, password, email, mobile, city, pan, state, pin) values ('$name', '$userid', '$password', '$email', '$mobile', '$city', '$pan', '$state', '$pin')";


mysqli_query($con, $query);


 ?>