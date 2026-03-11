<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.zoho.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rajatkumar.swain@zohomail.in'; // Your Zoho email
        $mail->Password   = 'L9rB0866zjUF';            // Zoho app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Sender & Recipient
        $mail->setFrom('rajatkumar.swain@zohomail.in', 'Geek Infotech Enquiry');
        $mail->addAddress('geek_infotech@zohomail.in');  // Primary recipient
        // $mail->addAddress('rajatkumar.swain@zohomail.in');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Enquiry Form Geek Infotech';
       $mail->Body = '
  <div style="font-family: Arial, sans-serif; font-size: 15px; color: #333;">
    <h2 style="color: #006400;">New Admission Enquiry from Geek Infotech Website</h2>
    <table cellpadding="8" cellspacing="0" border="0" style="width: 100%; max-width: 600px; background-color: #f9f9f9; border: 1px solid #ddd;">
      <tr><td><strong>Title:</strong></td><td>' . $_POST['title'] . '</td></tr>
      <tr><td><strong>Name:</strong></td><td>' . $_POST['first_name'] . ' ' . $_POST['middle_name'] . ' ' . $_POST['last_name'] . '</td></tr>
      <tr><td><strong>Email:</strong></td><td>' . $_POST['email'] . '</td></tr>
      <tr><td><strong>Phone:</strong></td><td>' . $_POST['phone'] . '</td></tr>
      <tr><td><strong>Qualification:</strong></td><td>' . $_POST['qualification'] . '</td></tr>
      <tr><td><strong>Course Interested:</strong></td><td>' . $_POST['course'] . '</td></tr>
      <tr><td><strong>Address:</strong></td><td>' . $_POST['street'] . ', ' . $_POST['address2'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ' - ' . $_POST['zip'] . '</td></tr>
      <tr><td><strong>Message:</strong></td><td>' . nl2br($_POST['message']) . '</td></tr>
    </table>
    <p style="margin-top: 20px; font-size: 13px; color: #666;">This enquiry was submitted via the Geek Infotech website on ' . date("d M Y, h:i A") . '.</p>
  </div>
';

        $mail->send();
        header("Location: thankyou.html");
        exit;
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>