<?php
// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Replace this with the actual path to your PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $to = 'nemodaongame@gmail.com'; // Replace with your email address
    $subject = $_POST['subject'] ?? ''; // Use null coalescing operator to set default value if not set
    $message = $_POST['message'] ?? ''; // Use null coalescing operator to set default value if not set
    $email = $_POST['email'] ?? ''; // Use null coalescing operator to set default value if not set

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; // Enable verbose debug output
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'felujitasmestere.hu';                     // SMTP server
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'your_smtp_username@example.com';       // SMTP username
        // $mail->Password   = 'your_smtp_password';                // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo '<div class="alert alert-success">Az üzenetet sikeresen elküldtük.</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Hiba történt az üzenet elküldése során. Kérjük, próbáld újra később.</div>';
    }
}
?>


<?php include_once("header/header.php"); ?>
<h1 class="text-center my-2">Vedd fel velünk a kapcsolatot</h1>
<div class="row mx-4 my-4">
    <div class="card">
        <div class="card-header" style="font-size: 1.25rem;">
            Küldj innen emailt:
        </div>
        <div class="card-body">
            <form method="post">
                <!-- email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email címem</label>
                </div>

                <!-- subject -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="subject" placeholder="Tárgy" required>
                    <label for="floatingTextarea">Tárgy</label>
                </div>

                <!-- text/description -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" placeholder="Szöveg" id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Szöveg</label>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" name="submit" class="btn btn-primary me-md-2">Üzenet küldése</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include_once("header/footer.php"); ?>
