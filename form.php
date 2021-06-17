<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: YourWebsite.com'; 
    $to = 'youremail@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<script>alert("Your form was sent. I will be in touch."); window.location="index.html#contact"</script>';
    } else { 
        echo '<script>alert("Oops! An error occured. Try sending your message again."); window.location="index.html#contact"</script>'; 
    }
}
?>