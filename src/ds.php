<!-- hiển thị danh sách bệnh nhân -->
<?php
include 'header.php';
?>
<!-- xây dựng form để hiển thị ra các sql đó có thể là table bằng bootstrap -->
<h1>Danh Sách Các Bệnh Nhân:</h1>
<a href="http://localhost/project/src/addbn.php" class="btn btn-success">Thêm Bệnh Nhân</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã Bệnh Nhân</th>
            <th scope="col">Họ</th>
            <th scope="col">Tên Bệnh Nhân</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Nhóm Máu</th>
            <th scope="col">Số Điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Chiều Cao</th>
            <th scope="col">Cân Nặng</th>
            <th scope="col">Ngày Lập Sổ</th>
            <th scope="col">Ngày Cập Nhật</th>
        </tr>
    </thead>
    <tbody>

        <?php
    //   b1 kn sql
    $conn = mysqli_connect('localhost','root','','qlbv');
    if(!$conn){
        die("Không thể kết nối đến csdl");
    }
    //b2 thực hiện câu lệnh truy vấn
    $sql = "SELECT * FROM patient";
    $result = mysqli_query($conn,$sql);
     //b3 kiểm tra
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
            echo '      <tr>';
      echo '<td>'.$row['patientid'].'</td>';
      echo '<td>'.$row['firstname'].'</td>';
      echo '<td>'.$row['lastname'].'</td>';
      echo '<td>'.$row['dateofbirth'].'</td>';
      echo '<td>'.$row['gender'].'</td>';
      echo '<td>'.$row['mobile'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '<td>'.$row['height'].'</td>';
      echo '<td>'.$row['weight'].'</td>';
      echo '<td>'.$row['blood_type'].'</td>';
      echo '<td>'.$row['created_on'].'</td>';
      echo '<td>'.$row['modified_on'].'</td>';
      echo ' </tr>';
        }
    }
      ?>

    </tbody>
</table>
<?php
include 'footer.php';
?>