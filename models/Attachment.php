<?php
    class Attachment{

        public $name;
        public $type;
        public $size;

            function __construct($name, $type, $size){
                $this->name = $name;
                $this->type = $type;
                $this->size = $size;
            }

    }
?>