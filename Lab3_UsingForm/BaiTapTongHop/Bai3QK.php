<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Phép tính</title>
    <link rel="stylesheet" type="text/css" href="Bai3.css">
</head>
<body>
<?php
  //
    if(isset($_POST['so1']))  
        $so1=trim($_POST['so1']);
    if(isset($_POST['so2']))  
        $s=trim($_POST['so2']); 
    else{
        $so1=0;
        $so2=0;
    }  
    if (is_numeric($_POST['so1']) and is_numeric($_POST['so2']))
    {
        switch (isset($_POST['pheptinh'])) 
        {
          case $_POST['pheptinh']=='Cộng':
              $kq=$_POST['so1']+$_POST['so2'];
              break;
          case $_POST['pheptinh']=='Trừ':
              $kq=$_POST['so1']-$_POST['so2'];
              break;
          case $_POST['pheptinh']=='Nhân':
              $kq=$_POST['so1']*$_POST['so2'];
              break;
          case $_POST['pheptinh']=='Chia':
              $kq=$_POST['so1']%$_POST['so2'];
              break;
          
          default:
              //echo "Lỗi không xác định, hihi!"
              break;
      }
    }
    else {
          echo "<font>Vui lòng nhập số và không để khoảng trắng!</font>";
            $kq=0;            
        }
    //
?>

<div class="login-box">
  <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
  <form>
    <table>
        <tr>
            <td>Chọn phép tính: </td>
            <td>
              <?php
                if (isset($_POST['pheptinh'])){
                  echo $_POST['pheptinh'];
                }
              ?>
            </td>
        </tr>
        <tr>
            <td>Số thứ nhất:</td>
            <td><input type="text" name="so1" value="<?php if (isset($_POST['so1'])){echo $_POST['so1'];}?>"></td>
        </tr>
        <tr>
            <td>Số thứ hai:</td>
            <td><input type="text" name="so2" value="<?php if (isset($_POST['so2'])){echo $_POST['so2'];}?>"></td>
        </tr>
        <tr>
            <td>Kết quả:</td>
            <td><input type="text" name="kq" disabled="disabled" value="<?php  echo $kq;?> "/></td>
        </tr>
    </table>
    <div>
        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </a>
    </div>
  </form>
</div>
</body>
</html>