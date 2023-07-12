<?php
    class Sms extends CommunicationSystem{

        private $readNotification;
        private $replyApproval;
        public static $ledColor = "Green";

            function __construct(String $sender, String $receiver, String $title, String $content){
                parent::__construct($sender, $receiver, $title, $content, Bool $readNotification, Bool $replyApproval);
                $this->readNotification = $readNotification;
                $this->replyApproval = $replyApproval;            }
    }
?>