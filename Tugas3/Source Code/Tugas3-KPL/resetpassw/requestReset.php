
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'functions.php';

if(isset($_POST["email"])){

  $emailTo = $_POST["email"];

  $code = uniqid(true);
  $query = mysqli_query($conn, "INSERT INTO resetpassw(code, email) VALUES ('$code', '$emailTo')");
  if(!$query){
    exit("error");
  }


  //Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nmwcompanybyme@gmail.com';                     //SMTP username
    $mail->Password   = 'Santa264';                               //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('nmwcompanybyme@gmail.com', 'NMW Company');
    $mail->addAddress($emailTo);     //Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No Reply');

    //Content
    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpassword.php?code=$code";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Password Reset Link';
    $mail->Body    = "<h1>You Requested a password reset</h1>
                      Click <a href='$url'>This Link</a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>
        alert(' Reset Password link has been sent to your email');
        </script>";
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

  exit ();

}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Forgot Password</title>
 <style>
      body {
       background-image : url("img/pastelpaint.jpg");
        background-repeat: no-repeat;
       background-size:cover;
      }
    </style>

</head>
<body>
    <center>
    <div class="card text-dark bg-light mb-3" style="max-width: 40rem; margin-top: 100px">
      <div class="card-body">
        <div class="card-body">
              <h2 style="font-size: 30px;">Enter email associated with account</h2>
              <div class="underline-title"></div>
        </div>
        <form method="POST">
        
        <div class="form-group"> 
            <label for="email-for-pass">Enter your email address</label> 
            <input class="form-control" type="text" id="email-for-pass" required="" autocomplete="off" name="email" > 
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Reset Email">

        </form>
    </div>
 </div>
</div>
</body>
</html>