<?php
 
include('koneksi.php'); 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/POP3.php';
require 'PHPMailer/src/SMTP.php';

if ( isset($_POST['proses']) ) {   
		$nama = $_POST['nama'];
		$password = MD5($_POST['password']);
		$email = $_POST['email'];
		$code = MD5($email . date('Y-m-d'));
		$level = $_POST['level'];

		//query insert data
		$query = "INSERT INTO user (nama, email, password, verif_code, level)
		VALUES('$nama','$email','$password', '$code', '$level')";
		
		mysqli_query($conn, $query);

		// cek apakah data berhasil ditambahkan
		if (mysqli_affected_rows($conn ) > 0 ) {
			echo "<script>
				alert('Registrasi Berhasil Silahkan Login');
				document.location.href = 'login.php'
				</script>";
		}
	}

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'nmwcompanybyme@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'Santa264';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('nmwcompanybyme@gmail.com', 'NMW Company');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
//$mail->addReplyTo('no-reply@gmail.com', 'No Reply');

//Set who the message is to be sent to
$mail->addAddress($email, $nama);

//Set the subject line
$mail->Subject = 'Verifikasi Akun - NMW Company';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "Hi, '.$nama.'<br>Silahkan verifikasi email Anda sebelum mengakses website : <br> http://localhost/Tugas3-KPL/confirmEmail.php?code=".$code;
$mail-> Body = $body;

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Register sukses, silahkan login!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
?>