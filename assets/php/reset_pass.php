<?php
if($_GET['key'] && $_GET['reset'])
{
    // $password = mysqli_real_escape_string($conn, $_POST['passwd']);
  $email= $_GET['key'];
  $pass= $_GET['reset'];
  // $pass = $_GET password_verify($password, $row['Password']);
  include 'config.php';
  mysql_select_db('chaheg2');
  $select=mysql_query("select Email,Password from users where Password='$pass' and ='$email'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>
