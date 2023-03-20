<?php

    class Sumar{
        private $num1;
        private $num2;
        private $Resultado;

        public function setNum1($num1) {$this->num1 = $num1;}
        public function getNum1() {return $this->num1;}
        public function setNum2($num2) {$this->num2 = $num2;}
        public function getNum2() {return $this->num2;}


        function CalcularSuma(){
            
            $this->Resultado = $this->getNum1()+$this->getNum2();

            echo "<script>alert('La suna de $this->num1 + $this->num2 es: $this->Resultado')</script>";
            echo "<script>window.open('../view/ConstructoresDestructores/SumaV.html', '_self')</script>";
        }
    
    }

?>