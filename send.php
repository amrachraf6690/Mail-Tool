
<body>
    <h1>Send email using local SMTP</h1>
    
    <form action="" method="POST">
        <center>
        <input type="email" name="mailto" id="" placeholder="Mail To"><br>
        <input type="email" name="mailfrom" id="" placeholder="Mail From"><br>
        <input type="name" name="name" id="" placeholder="Name"><br>
        <input type="subject" name="subject" id="" placeholder="Subject"><br>
        <input type="message" name="message" id="" placeholder="Message"><br>
        <button type="submit" name="submit">Test Mail</button>
        </center>
    </form>
    <hr>
    <h2>Result:</h2>
</body>
<?php

if (isset ($_POST['mailto'])){
    $mailto = $_POST['mailto'];
    $mailfrom = $_POST['mailfrom'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = 'From: '.$mailfrom.''       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($mailto, $subject, $message, $headers);
}
?>