<?php

    require_once __DIR__."/models/CommunicationSystem.php";
    require_once __DIR__."/models/Email.php";
    require_once __DIR__."/models/Sms.php";
    require_once __DIR__."/models/NotifichePush.php";
    require_once __DIR__."/models/Attachment.php";

    // ISTANZE
    $email_1 = new Email("Pedro", "Leo", "Presentazione completa", "Lorem Ipsum ...", true);
    $email_2 = new Email("Sandro", "Pedro", "Business Meeting", "Lorem Ipsum ...", false);

    $email_1->attachment = new Attachment("Presentazione", "avi", 33);

    // var_dump($email_1);
    // var_dump($email_2);

    $sms_1 = new Sms("Kay", "Tiago", "SMS", "Lorem Ipsum ...", true, true);
    $sms_2 = new Sms("Sam", "Irene", "SMS", "Lorem Ipsum ...", false, false);

    // var_dump($sms_1);
    // var_dump($sms_2);

    $pushNotification_1 = new NotifichePush("Julie", "Kiara", "Whatsapp", "Call me!", true, "fab fa-whatsapp");
    $pushNotification_2 = new NotifichePush("Phil", "Randy", "Twitter", "Hey!", false, "fab fa-twitter");

    // var_dump($pushNotification_1);
    // var_dump($pushNotification_2);

    // ARRAY ISTANZE
    $CommunicationSystem = [
        $email_1,
        $email_2,
        $sms_1,
        $sms_2,
        $pushNotification_1,
        $pushNotification_2
    ]

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
        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 text-center my-3">
                        <h1>Communication System</h1>
                    </div>
                    <?php foreach($CommunicationSystem as $item): ?>
                        <div class="col-4 my-3">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        <?php echo get_class($item)?>
                                    </h2>
                                </div>
                                <div class="card-body">

                                    <div class="my-2">
                                        <strong>Mittente:</strong>
                                        <span>
                                            <?php echo $item->getSender() ?>
                                        </span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Destinatario:</strong>
                                        <span>
                                            <?php echo $item->getReceiver() ?>
                                        </span>
                                    </div>

                                    <hr>

                                    <div class="my-2">
                                        <strong>Titolo:</strong>
                                        <span>
                                            <?php echo $item->getTitle() ?>
                                        </span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Contenuto:</strong>
                                        <span>
                                            <?php echo $item->getContent() ?>
                                        </span>
                                    </div>

                                    <hr>

                                    <div class="my-2">
                                        <strong>Suoneria:</strong>
                                        <span>
                                            <?php echo $item::$ringtone ?>
                                        </span>
                                    </div>

                                    <hr>

                                    <div class="my-2">
                                        <span>
                                            <?php echo $item->send() ?>
                                        </span>
                                    </div>
                                    <hr>
                                    <?php if(get_class($item) === "Email"){ ?>

                                        <!-- Attachment -->
                                        <?php if($item->attachment){ ?>
                                            <div class="my-2">
                                                <div>
                                                    <strong>Allegato:</strong>
                                                    <ul>
                                                        <li>
                                                            <span>Nome Allegato:</span>
                                                            <span>
                                                                <?php echo $item?->attachment->name ?>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Formato Allegato:</span>
                                                            <span>
                                                                <?php echo $item?->attachment->type ?>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Dimensione Allegato:</span>
                                                            <span>
                                                                <?php echo $item?->attachment->size." MB " ?>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                        <?php } ?>

                                        <div class="my-2">
                                            <strong>Email Consegnata:</strong>
                                            <span>
                                                <?php echo ($item->getDeliveryNotification()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <hr>
                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->forward() ?>
                                            </span>
                                        </div>
                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->print() ?>
                                            </span>
                                        </div>
                                        <hr>
                                    <?php } ?>

                                    <?php if(get_class($item) === "Sms"){ ?>
                                        <div class="my-2">
                                            <strong>Sms visualizzato:</strong>
                                            <span>
                                                <?php echo ($item->getReadNotification()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <div class="my-2">
                                            <strong>Risposta Consentita:</strong>
                                            <span>
                                                <?php echo ($item->getReplyApproval()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <?php if($item->getReplyApproval()){ ?>
                                            <div class="my-2">
                                                <span>
                                                    <?php echo $item->reply(); ?>
                                                </span>
                                            </div>
                                        <?php } ?>
                                        <hr>
                                    <?php } ?>

                                    <?php if(get_class($item) === "PushNotifications"){ ?>
                                        <div class="my-2">
                                            <strong>Notifica visibile:</strong>
                                            <span>
                                                <?php echo ($item->getVisible()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <div class="my-2">
                                            <strong>Icona notifica:</strong>
                                            <i class="<?php echo $item->getIcon() ?>"></i>
                                        </div>

                                        <hr>

                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->click() ?>
                                            </span>
                                        </div>
                                        <hr>
                                    <?php } ?>

                                    <div class="my-2">
                                        <strong>Colore Led:</strong>
                                        <span>
                                            <?php switch($item::$ledColor){
                                                case 'Green':
                                                    echo 'Verde';
                                                break;
                                                case 'Red':
                                                    echo 'Rosso';
                                                break;
                                                case 'Blue':
                                                    echo 'Blu';
                                                break;
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>  
        </main>  
    </body>
</html>