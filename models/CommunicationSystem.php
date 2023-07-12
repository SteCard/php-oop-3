<?php
    class CommunicationSystem {

        // PROPRIETA'
        private $sender;
        private $receiver;
        private $title;
        private $content;
        public static $ringtone = "DRIIIN";

            function __construct(String $sender, String $receiver, String $title, String $content){
                $this->sender = $sender;
                $this->receiver = $receiver;
                $this->title = $title;
                $this->content = $content;
            }
        
    }
?>