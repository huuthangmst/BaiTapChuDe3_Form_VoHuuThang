<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Phép tính</title>
    <link rel="stylesheet" type="text/css" href="Bai3.css">
</head>
<body>

<div class="login-box">
  <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
  <form method="POST" action="Bai3QK.php">
    <table>
        <tr>
            <td>Chọn phép tính: </td>
            <td><input type="radio" name="pheptinh" value="Cộng"<?php if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Cộng') echo 'checked="checked"';?> checked/>Cộng<br></td>
            <td><input type="radio" name="pheptinh" value="Trừ" <?php if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Trừ') echo 'checked="checked"';?>/>Trừ</td>
            <td><input type="radio" name="pheptinh" value="Nhân" <?php if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Nhân') echo 'checked="checked"';?>/>Nhân</td>
            <td><input type="radio" name="pheptinh" value="Chia" <?php if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Chia') echo 'checked="checked"';?>/>Chia</td>
            <br></td>
            
        </tr>
        <tr>
            <td>Số thứ nhất:</td>
            <td colspan="4"><input type="text" name="so1"<?php if(isset($_POST['so1'])&&$_POST['so1']=='so1') echo 'checked="checked"';?> /></td>
        </tr>
        <tr>
            <td>Số thứ hai:</td>
            <td colspan="4"><input type="text" name="so2"<?php if(isset($_POST['so2'])&&$_POST['so2']=='so2') echo 'checked="checked"';?> /></td>
        </tr>
    </table>
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