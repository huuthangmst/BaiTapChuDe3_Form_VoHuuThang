<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Infomation</title>
    <link rel="stylesheet" type="text/css" href="Bai4.css">
</head>
<body>

<div class="inf-box">
  <h2>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h2>
  <?php
    if((isset($_POST['hoten']))){
       if(empty($_POST['hoten'])){
          echo "<p>Họ tên: Không được để trống</p>";
       }
       else if(is_numeric($_POST['hoten'])){
          echo "<p>Họ tên: Không được nhập số nhé</p>";
       }
       else{
        echo "Họ tên: ".$_POST['hoten']."<br/>";
       }
    }
    if (isset($_POST['gioitinh'])){
      echo "Giới tính: ".$_POST['gioitinh']."<br/>";
    }
    if((isset($_POST['dienthoai']))){
       if(empty($_POST['dienthoai'])){
          echo "<p>Điện thoại: Không được để trống</p>";
       }
       else if(is_numeric($_POST['dienthoai'])){
        echo "Điện thoại: ".$_POST['dienthoai']."<br/>";
       }
       else{
          echo "<p>Điện thoại: Hổng được nhập chữ đâu</p>";
       }
    }
    else{
      echo "<p>Lỗi không xác định</p>";
    }
    if((isset($_POST['diachi']))){
       if(empty($_POST['diachi'])){
          echo "<p>Địa chỉ: Không được để trống!</p>";
       }
       else{
        echo "Địa chỉ: ".$_POST['diachi']."<br/>";
       }
    }
    if (isset($_POST['quoctich'])){
      echo "Quốc tịch: ".$_POST['quoctich']."<br/>";
    }
    echo "Môn học: ";
    if ((isset($_POST['tick1']))){
      echo $_POST['tick1'].", ";
    }
    if ((isset($_POST['tick2']))){
      echo $_POST['tick2'].", ";
    }
    if ((isset($_POST['tick3']))){
      echo $_POST['tick3'].", ";
    }
    if ((isset($_POST['tick4']))){
      echo $_POST['tick4'].", ";
    }
    echo "<br/>";
    if((isset($_POST['note']))){
       if(empty($_POST['note'])){
          echo "<p>Ghi chú: Không được để trống!</p>";
       }
       else{
        echo "Ghi chú: ".$_POST['note'];
       }
    }
    else{
      echo "<p>Lỗi không xác định</p>";
    }
  ?>
  <div>
        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
    </div>
</div>
</body>
</html>
