<?php

require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';
include 'config.php';


if(isset($_POST['submit_email']) && $_POST['email'])
{

  mysqli_select_db($conn, 'chaheg2');
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $select="SELECT Email,Password from users where email='$email'";
  $result = mysqli_query($conn, "SELECT Email,Password from users where email='$email'");
  // $select = mysqli_num_rows($result);

  if(mysqli_num_rows($result)==1)
  {
    while($row=mysqli_fetch_array($result))
    {
      $email=($row['Email']);
      // $pass=password_verify($password, $row['Password']);
      $pass=($row['Password']);
    }
    $link="<a href='reset.php?key=".$email."'>Click To Reset password</a>";

    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;
    // GMAIL username
    $mail->Username = "2413feae5ff3c1";
    // GMAIL password
    $mail->Password = "8f6b393572354c";
    $mail->SMTPSecure = "ssl";
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.mailtrap.io";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='060476f52f-c8a5f1@inbox.mailtrap.io';
    $mail->FromName='Team 1';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }
}
?>
