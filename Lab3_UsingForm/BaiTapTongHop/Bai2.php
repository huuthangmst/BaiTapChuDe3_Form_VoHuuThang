<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tiền điện</title>
    <link rel="stylesheet" type="text/css" href="Bai2.css">
</head>
<body>
<?php 
    if(isset($_POST['tenchuho']))  
        $tenchuho=trim($_POST['tenchuho']);
    if(isset($_POST['chisocu']))  
        $chisocu=trim($_POST['chisocu']);
    if(isset($_POST['chisomoi']))  
        $chisomoi=trim($_POST['chisomoi']);
    if(isset($_POST['dongia']))  
        $dongia=trim($_POST['dongia']);  
    else{
        $chisocu=0;
        $chisomoi=0;
        $dongia=2000;
        $tenchuho="Vo Huu Thang";
        $thanhtoan=0;

    }  

    if(isset($_POST['tinh']))
            if (is_numeric($chisocu) and is_numeric($chisomoi) and $chisomoi>$chisocu)  
                $thanhtoan=($chisomoi-$chisocu)*$dongia;
            else{
                    if($chisomoi<$chisocu){
                        echo "<font>Chỉ số mới phải lớn hơn chỉ số cũ! </font>"; 
                        $chisomoi="";
                        $chisocu="";
                        $thanhtoan=0;
                    }
                    else{
                        echo "<font>Vui lòng nhập vào số! </font>"; 
                        $chisomoi="";
                        $chisocu="";
                        $thanhtoan=0;
                    }
                }
    else $thanhtoan=0;
?>

<div class="login-box">
  <h2>THANH TOÁN TIỀN ĐIỆN</h2>
  <form method="POST" action="">
    <div class="user-box">
      <input type="text" name="tenchuho" value="<?php  echo $tenchuho;?> "/>
      <label>Tên chủ hộ</label>
    </div>
    <div class="user-box">
      <input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/>
      <label>Chỉ số cũ</label>
    </div>
    <div class="user-box">
      <input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/>
      <label>Chỉ số mới</label>
    </div>
    <div class="user-box">
      <input type="text" name="dongia" value="<?php  echo $dongia;?> "/>
      <label>Đơn giá</label>
    </div>
    <div class="user-box">
        <h4>Số tiền phải thanh toán:</h4>
      <input type="text" name="thanhtoan" disabled="disabled" value="<?php  echo $thanhtoan;?> "/>
    </div>
    <div>
        <a><input type="submit" name="tinh" value="Tính">
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