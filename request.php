<?php
  require 'dbconnect.php';
//Security feature like 2 step verification and less secure access changed
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';
  session_start();
  $v=$_POST['oid'];
  $b=$_SESSION['st_id'];
  $c=$_POST['bname'];
  $r=mysqli_query($conn,"SELECT * FROM users WHERE st_id='$v'") or die(mysqli_error($conn));
  $p=mysqli_fetch_array($r);
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug  = 0;
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "admin@gmail.com";
  $mail->Password   = "lalala";

  $mail->IsHTML(true);
  $mail->AddAddress($p['email']);
  $mail->SetFrom("admin@gmail.com", "Hasan Jamil");
  $mail->AddReplyTo("hasanjamil.daan@gmail.com", "HJ");
//  $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "Request for the book from Readers Point";
  $content = $b." "."<b>requested you for the book:</b>"." ".$c;

  $mail->MsgHTML($content);
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo"<script>
      var r=confirm('Requested');
      if(r) {
        window.location.href='home.php';
      }
    </script>";
  }
?>
