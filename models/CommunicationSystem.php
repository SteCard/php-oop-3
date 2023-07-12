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
            
            // FUNZIONI
            public function getSender(){
                return $this->sender;
            }

            public function getReceiver(){
                return $this->receiver;
            }

            public function getTitle(){
                return $this->title;
            }

            public function getContent(){
                return $this->content;
            }

            public function send(){
                return "Comunicazione effettuata";
            }
        
    }
?>