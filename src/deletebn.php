<?php
include 'header.php';
?>

<?php
include 'config.php';
// b2
if(isset($_GET['patientid']))
{
    $idindex = $_GET['patientid'];
    $sql = "delete from patient
    where patientid = '$idindex'";
    $result = mysqli_query($conn,$sql);
// b3
   if($result==true){
       header("location: ds.php");
   }
   else{
    header("location: error.php");
   }
}
?>


