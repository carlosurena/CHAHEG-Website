<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  // $email=$_POST['email'];
  // $pass=$_POST['password'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, $_POST['passwd']);
  $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
  include 'config.php';
  // mysql_connect('localhost','root','');
  // mysql_select_db('chaheg2');
  $select=mysql_query("update users set password='$hashedPwd' where email='$email'");
}
?>
