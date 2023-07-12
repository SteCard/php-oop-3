<?php
    class Sms extends CommunicationSystem{

        private $readNotification;
        private $replyApproval;
        public static $ledColor = "Green";

            function __construct(String $sender, String $receiver, String $title, String $content, Bool $readNotification, Bool $replyApproval){
                parent::__construct($sender, $receiver, $title, $content);
                $this->readNotification = $readNotification;
                $this->replyApproval = $replyApproval;            
            }

            // FUNZIONI
            public function getReadNotification(){
                return $this->readNotification;
            }

            public function getReplyApproval(){
                return $this->replyApproval;
            }

            public function reply(){
                return "Risposta inviata";
            }

            // POLIMORFISMO
            public function send(){
                return "Sms inviato";
            }
    }
?>