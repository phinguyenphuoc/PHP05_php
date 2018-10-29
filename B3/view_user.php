<?php 
echo $_POST['name'].'-'.$_POST['email'];//ten cua input,chi lay du lieu khi method cua form la post
echo "<br>--------------------";
echo $_GET['name'].'-'.$_GET['email'];//chi lay du lieu khi method cua form la get
echo "<br>--------------------";
echo $_REQUEST['name'].'-'.$_REQUEST['email'];//lay du lieu trong ca 2 truong hop
 ?>