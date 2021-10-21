
<?php

// bước 01 : kết nối đến server
// định nghĩa hằng số
define('HOST','localhost');
define('USER','root');
const PASS ='';
const DB ='qlbv';
// phương thức kết nối databasse server yc 1 số tham số cơ bản
$conn = mysqli_connect(HOST,USER,PASS,DB);
if(!$conn){
// vừa thông báo chuỗi ra màn hình và không thực hiện đoạn mã
die('Không thể kết nối');
}
?>