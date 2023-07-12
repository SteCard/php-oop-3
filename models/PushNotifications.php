<?php
    class PushNotifications extends CommunicationSystem{

        private $visible;
        private $icon;
        public static $ledColor = "White";

            function __construct(String $sender, String $receiver, String $title, String $content, Bool $visible, String $icon){
                parent::__construct($sender, $receiver, $title, $content);
                $this->visible = $visible;
                $this->icon = $icon;
            }

            // FUNZIONI
            public function getVisible(){
                return $this->visible;
            }

            public function getIcon(){
                return $this->icon;
            }

            // CLICK
            public function click(){
                return "Notifica cliccata";
            }

            // POLIMORFISMO FUNCTION "SEND"
            public function send(){
                return "Notifica inviata";
            }
    }
?>