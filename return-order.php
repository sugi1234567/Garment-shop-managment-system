<?php
session_start();
include_once 'includes/config.php';
$oid=intval($_GET['oid']);
 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>


<?php
//require_once "connect.php";
$msg = "";
if(isset($_REQUEST['submit'])) 
  {
    $oid = $_REQUEST['oid'];
    $email = $_REQUEST['email'];
    $reason = $_REQUEST['reason'];

    $query = "insert into returnorder (oid,email,reason) values ('$oid','$email','$reason')";
    if(mysql_query($query))
    {
    echo '<script language="javascript">';
    echo 'alert("Your Order is Returned Successfully!")';
    echo '</script>';
    } 
    else 
    {
    echo '<script language="javascript">';
    echo 'alert("Unable to Save!")';
    echo '</script>';
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order Return</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Order Return !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>order Id:</b></td>
      <td  class="fontkink"><?php echo $oid;?></td>
    </tr>
  

   
</table>

<form method="post">
    <input type="text" name="oid" value="<?php echo $oid;?>" readonly> <br><br>

    <input type="email" name="email" placeholder="Your E-Mail ID" required> <br><br>

    Reason for Return<br><br>
    <textarea style="width:300px; height: 150px;" name="reason" required></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>


</div>

</body>
</html>

     