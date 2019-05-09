<?php
require_once ('smsGatewayV4.php');
//require ('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trial sms gateway</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
    <body>
        <div class="wrapper-main">
            <section class="section-default">
            <h1>SMS gateway</h1>
                <form class="form-sms" action="sendSms.php" method="post">
                <input type="text" name="device_id" placeholder="no device yang digunakan">
                <input type="text" name="phonenumber_id" placeholder="No telefon yang dituju">
                <input type="text" name="message_id" placeholder"Masukan teks yang ingin di kirim">
                <button type="submit" name="submit-sms">Kirim</button>
                </form>
            </section>
        </div>
    </body>
</html>

<?php

//require ('footer.php');
?>
