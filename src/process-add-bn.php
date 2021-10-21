<?php
session_start(); //Công ty dịch vụ Bảo vệ
if(isset($_POST['btn-add'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood_type = $_POST['blood_type'];
$created_on = $_POST['created_on'];
$modified_on = $_POST['modified_on'];
}
include 'config.php';
$sql = "insert into patient (firstname,lastname,dateofbirth,gender,mobile,email,height,weight,blood_type,created_on,modified_on)
values('$firstname','$lastname','$dadteofbirth', '$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on')";
// kiểm tra lỗi echo $sql để ta tìm lỗi sql
$result = mysqli_query($conn, $sql);
echo 'ok';
// buowc3:
if($result>0){
    header("location: ds.php");
}
else{
    header("location: error.php");
}
// buowcs4 đóng kết nối
mysql_close($conn);

?>