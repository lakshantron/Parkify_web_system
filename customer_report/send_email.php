<?php
if (isset($_POST['send_email'])) {
    // Retrieve data from hidden input fields
    $recipientEmail = $_POST['email'];
    $name = $_POST['name'];
    // Retrieve other data from hidden fields as needed

    // Compose the email message
    $subject = "Data from Your Website";
    $message = "Hello $name,\n\n";
    $message .= "Here is the data from the website:\n";
    // Append the data you want to send
    // You can access the data from the hidden input fields here

    // Example:
    $message .= "Name: $name\n";
    $message .= "Email: $recipientEmail\n";
    // Add more data as needed

    // Send the email
    $headers = "From: your_email@example.com"; // Replace with your email address

    if (mail($recipientEmail, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
