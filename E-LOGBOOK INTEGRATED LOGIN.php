<?php
// $User name = $_POST["User name"];
 //echo User name;



 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled E- LOGBOOK INTEGRATED LOGIN</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<div align="left">
  <p><strong>LOGIN</strong></p>
  <table width="200" border="0">
    <tr>
      <td><form id="form4" name="form4" method="post" action="">
        <input type="text" name="textfield"placeholder="Username" />
      </form></td>
    </tr>
    <tr>
      <td><form id="form5" name="form5" method="post" action="">
        <input type="password" name="textfield2"placeholder="Password" />
      </form></td>
    </tr>
    <tr>
      <td><form id="form6" name="form6" method="post" action="">
        <input type="checkbox" name="checkbox" value="checkbox" />
            show
      </form></td>
    </tr>
  </table>
  <form id="form1" name="form1" method="post" action="">
    <p>
      <input type="checkbox" name="checkbox4" value="checkbox" />
    Remember me 
    <span class="style1">
<input type="checkbox" name="checkbox5" value="checkbox" />
Forgot password</span></p>
  </form>
  <form id="form2" name="form2" method="post" action="">
    <input type="submit" name="Submit" value="log in" />
  </form>
  <p>Or you can log in with </p>
  <form id="form3" name="form3" method="post" action="">
    <p>
     <a href="#"><img src="icons/facebook icon.jpg" width="2.5%" height="2.5%"/></a>
     <a href="#"><img src="icons/whatsapp-icon.jpg" width="2.5%" height="5%"/></a>
     <a href="#"><img src="icons/github icon.jpg" width="2.5%" height="2.5%"/></a>
     <a href="#"><img src="icons/Tiktok-icon.jpg" width="2.5%" height="5%"/></a>
    </p>
  </form>
  <p>Dont have an account?<span class="style1"> <a href="SIGN UP.php">Sgin up </a></span></p>
</div>
<p>&nbsp;</p>
</body>
</html>
