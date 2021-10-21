<!-- hiển thị danh sách bệnh nhân -->
<?php
include 'header.php';
?>
<!-- xây dựng form để hiển thị ra các sql đó có thể là table bằng bootstrap -->
<h1>Danh Sách Các Bệnh Nhân:</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã Bệnh Nhân</th>
            <th scope="col">Họ</th>
            <th scope="col">Tên Bệnh Nhân</th>
            <th scope="col"><a href="http://localhost/project/src/ds.php" class="btn btn-success">Chi Tiết</a></th>
            
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
    $sql = "SELECT patientid, firstname,lastname FROM patient";
    $result = mysqli_query($conn,$sql);
     //b3 kiểm tra
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
            echo '      <tr>';
      echo '<td>'.$row['patientid'].'</td>';
      echo '<td>'.$row['firstname'].'</td>';
      echo '<td>'.$row['lastname'].'</td>';
      echo '<td>...</td>';
      echo ' </tr>';
        }
    }
    
      ?>

    </tbody>
</table>
<?php
include 'footer.php';
?>