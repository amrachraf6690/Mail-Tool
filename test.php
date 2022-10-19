
<body>
    <h1>Test mail's mailbox</h1>
    
    <form action="" method="POST">
        <input type="email" name="email" id="" placeholder="Type mail to test">
        <button type="submit">Test Mail</button>
    </form>
    <hr>
    <h2>Result:</h2>
</body>
<?php

if (isset ($_POST['email'])){

$email= $_POST['email'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.apilayer.com/email_verification/".$email,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain",
    "apikey: Pgh4wTRmd7PEu1ObI1Y0bTGVnbdt7sQ3"
  ),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}
?>