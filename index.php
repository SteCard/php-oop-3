<?php

    require_once __DIR__."/models/CommunicationSystem.php";
    require_once __DIR__."/models/Email.php";
    require_once __DIR__."/models/Sms.php";
    require_once __DIR__."/models/PushNotifications.php";
    require_once __DIR__."/models/Attachment.php";

    // ISTANZE
    $email_1 = new Email("Pedro", "Leo", "Oggetto Email", "Contenuto Email", true);
    $email_2 = new Email("Sandro", "Pedro", "Oggetto Email", "Contenuto Email", false);

    $email_1->attachment = new Attachment("Presentazione", "avi", 33);

    // var_dump($email_1);
    // var_dump($email_2);

    $sms_1 = new Sms("Kay", "Tiago", "Titolo Sms", "Contenuto Sms", true, true);
    $sms_2 = new Sms("Sam", "Irene", "Titolo Sms", "Contenuto Sms", false, false);

    // var_dump($sms_1);
    // var_dump($sms_2);

    $pushNotification_1 = new PushNotifications("Julie", "Kiara", "Titolo Notifica Push", "Contenuto Notifica Push", true, "fab fa-whatsap");
    $pushNotification_2 = new PushNotifications("Phil", "Randy", "Titolo Notifica Push", "Contenuto Notifica Push", false, "fab fa-twitter");

    // var_dump($pushNotification_1);
    // var_dump($pushNotification_2);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>php-oop-3</title>
    </head>
    <body>
    </body>
</html>