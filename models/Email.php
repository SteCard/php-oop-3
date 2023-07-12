<?php
    class Email extends CommunicationSystem{

        public $attachment;
        private $deliveryNotification;
        public static $ledColor = "Yellow";

            function __construct(String $sender, String $receiver, String $title, String $content, Bool $deliveryNotification){
                parent::__construct($sender, $receiver, $title, $content);
                $this->deliveryNotification = $deliveryNotification;
            }
    }
?>