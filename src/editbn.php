<?php
session_start(); //Công ty dịch vụ Bảo vệ
?>
<?php
include 'header.php';
?>
<?php
include 'config.php';
?>
<main>
    <h2>Sửa Thông Tin Bệnh Nhân:</h2>
    <!-- cần nhập cái gì -->
    <?php
    if(isset($_POST['submitedit']) and isset($_GET['patientid'])){
        $idindex = $_GET['patientid'];
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
      // b2: thuc hien cac cau lenh truy van
      $sql = "update patient set
        firstname ='$firstname',
       lastname ='$lastname' ,
        dateofbirth = '$dateofbirth',
       gender = '$gender',
      mobile = '$mobile',
     email = ' $email',
      height = '$height',
       weight = '$weight',
       blood_type = '$blood_type',
       created_on = '$created_on',
       modified_on = '$modified_on'
     where patientid = '$idindex'
";

$result = mysqli_query($conn,$sql);

//b3 xu ly cau lenh truy van
if($result >0){
  header("location: ds.php");
}
else{
    header("location: error.php");
}
    }
    ?>
    <form class="container" action="" method="post">
  <div class="mb-3">
    <label for="empname" class="form-label">Họ</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="mb-3">
    <label for="empposition" class="form-label">Tên Bệnh Nhân</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="mb-3">
    <label for="empemail" class="form-label">Ngày Sinh</label>
    <input type="text" class="form-control" id="dateofbirth" name="dateofbirth">
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Giới Tính</label>
    <input type="tell" class="form-control" id="gender" name="gender">
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Số Điện Thoại</label>
    <input type="tell" class="form-control" id="mobile" name="mobile">
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Email</label>
    <input type="tell" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Chiều Cao</label>
    <input type="tell" class="form-control" id="height" name="height">
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Cân Nặng</label>
    <input type="tell" class="form-control" id="weight" name="weight">
  </div>
  <div class="mb-3">
    <label for="officename" class="form-label">Nhóm Máu</label>
    <select name="blood_type" id="blood_type">
        <?php
        $sql = "select * from patient";
        $result = mysqli_query($conn,$sql);
        // xử lý hiển thị kết quả
        if( mysqli_num_rows($result)){
            while($row =mysqli_fetch_assoc($result)){
                echo '<option value="'.$row['blood_type'].'">'.$row['blood_type'].'</option>';
            }
        }
         ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="empmobile" class="form-label">Ngày Lập Số</label>
    <input type="tell" class="form-control" id="created_on" name="created_on">
  </div><div class="mb-3">
    <label for="empmobile" class="form-label">Ngày Cập Nhật</label>
    <input type="tell" class="form-control" id="modified_on" name="modified_on">
  </div>
  <div class="mb-3">
    <button type="submit" name="submitedit" class="btn btn-success">Lưu Lại</button>
  </div>
</form>

</main>
<?php
include 'footer.php';
?>