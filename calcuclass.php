<?php

    class calculator{
        private $num1;
        private $num2;
        private $oper;

        public function __construct($insnum1, $insnum2, $insoper) {
            $this->num1 = $insnum1;
            $this->num2 = $insnum2;
            $this->oper = $insoper;
        }

        public function executee(){
            if($this->oper === "addition"){
                return $this->num1 + $this->num2;
            } else if($this->oper === "subtraction"){
                return $this->num1 - $this->num2;
            }
        }

    }

?>