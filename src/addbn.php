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
    <h2>Thêm Thông tin bệnh nhân</h2>
    <!-- cần nhập cái gì -->
<form class="container" action="process-add-bn.php" method="post">
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
    <button type="submit" name="btn-add" class="btn btn-success">Lưu Lại</button>
  </div>
</form>

</main>
<?php
include 'footer.php';
?>