<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data............//////......
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Basic validation (ensure fields are not empty)...../////.....////..////...////...
    if (empty($firstName) || empty($lastName) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 0, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    // If you want to use reCAPTCHA validation, here is an example (reCAPTCHA API validation)....
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha_secret = 'your-recaptcha-secret-key';
        $recaptcha_response = $_POST['g-recaptcha-response'];

        // Verifying the reCAPTCHA response.......
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
        $responseKeys = json_decode($response, true);
        if(intval($responseKeys["success"]) !== 1) {
            echo json_encode(['status' => 0, 'message' => 'Please verify that you are not a robot.']);
            exit;
        }
    }

    // Set up the email to send
    $to = "info@dckasarani.org"; //The email address where the form submissions will go.
    $subject = "Contact Us: $subject";
    $body = "You have received a new message from $firstName $lastName.\n\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Message: $message";
    
    // Send the email....
    if (mail($to, $subject, $body)) {
        echo json_encode(['status' => 1, 'message' => 'Your message has been sent successfully.']);
    } else {
        echo json_encode(['status' => 0, 'message' => 'There was an error sending your message. Please try again later.']);
    }
} else {
    echo json_encode(['status' => 0, 'message' => 'Invalid request method.']);
}

?>
