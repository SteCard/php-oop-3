<?php
    class Email extends CommunicationSystem{

        public $attachment;
        private $deliveryNotification;
        public static $ledColor = "Green";

            function __construct(String $sender, String $receiver, String $title, String $content, Bool $deliveryNotification){
                parent::__construct($sender, $receiver, $title, $content);
                $this->deliveryNotification = $deliveryNotification;
            }

            // FUNZIONI
            public function getDeliveryNotification(){
                return $this->deliveryNotification;
            }

            public function forward(){
                return "Inoltro effettuato";
            }

            public function print(){
                return "Stampa effettuata";
            }

            // POLIMORFISMO
            public function send(){
                return "Email inviata";
            }
    }
?>