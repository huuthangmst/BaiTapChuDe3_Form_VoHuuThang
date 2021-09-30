<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Infomation</title>
    <link rel="stylesheet" type="text/css" href="Bai4.css">
</head>
<body>

<div class="login-box">
  <h2>ENTER YOUR INFOMATION</h2>
  <form method="POST" action="Bai4inf.php">
    <fieldset>
        <legend>Enter your infomation</legend>
        <table>
        <tr>
            <td>Họ tên: </td>
            <td><input type="text" name="hoten" value=""<?php if(isset($_POST['hoten'])&&$_POST['hoten']=='Họ tên')?> /><br></td>
            
        </tr>
        <tr>
            <td>Địa chỉ: </td>
            <td><input type="text" name="diachi" value=""<?php if(isset($_POST['diachi'])&&$_POST['diachi']=='Địa chỉ')?> /><br></td>
        </tr>
        <tr>
            <td>Số điện thoại: </td>
            <td><input type="text" name="dienthoai" value=""<?php if(isset($_POST['dienthoai'])&&$_POST['dienthoai']=='Điện thoại')?> /><br></td>
        </tr>
        <tr>
            <td>Giới tính: </td>
            <td><input type="radio" name="gioitinh" value="Nam"<?php if(isset($_POST['gioitinh'])&&$_POST['gioitinh']=='Nam') echo 'checked="checked"';?> checked/>Nam<br></td>
            <td><input type="radio" name="gioitinh" value="Nữ" <?php if(isset($_POST['gioitinh'])&&$_POST['gioitinh']=='Nữ') echo 'checked="checked"';?>/>Nữ</td>
        </tr>
        <tr>
            <td>Quốc tịch: </td>
            <td>
                <select name="quoctich">
                    <option value="Việt Nam" <?php if(isset($_POST['vn'])&&$_POST['vn']=='Việt Nam')?> selected>Việt Nam</option>
                    <option value="Nga" <?php if(isset($_POST['nga'])&&$_POST['nga']=='Nga')?>>Nga</option>
                    <option value="Nhật" <?php if(isset($_POST['nhat'])&&$_POST['nhat']=='nhat')?>>Nhật</option>
                    <option value="Hàn Quốc" <?php if(isset($_POST['han'])&&$_POST['han']=='han')?>>Hàn Quốc</option>
                    <option value="Mỹ" <?php if(isset($_POST['my'])&&$_POST['my']=='my')?>>Mỹ</option>
              </select>
            </td>
        </tr>
        <tr>
            <td>Các môn đã học: </td>
            <td><input type="checkbox" name="tick1" value="PHP & MySQL"<?php if(isset($_POST['tick1'])&&$_POST['tick1']=='PHP & MySQL')?> />PHP & MySQL</td>
            <td><input type="checkbox" name="tick2" value="C#"<?php if(isset($_POST['tick2'])&&$_POST['tick2']=='C#')?> />C#</td>
            <td><input type="checkbox" name="tick3" value="XML"<?php if(isset($_POST['tick3'])&&$_POST['tick3']=='XML')?> />XML</td>
            <td><input type="checkbox" name="tick4" value="Java"<?php if(isset($_POST['tick4'])&&$_POST['tick4']=='Java')?> />Java</td>
        </tr>
        <tr>
            <td>Ghi chú: </td>
            <td><textarea name="note"></textarea></td>
        </tr>
    </table>
    </fieldset>
    <div>
        <tr>
            <td>
                <a><input type="submit" name="tinh" value="Gửi">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
            </td>
            <td></td>
            <td>
                <a><input type="reset" name="reset" value="Hủy">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
            </td>
        </tr>
    </div>
  </form>
</div>
</body>
</html>