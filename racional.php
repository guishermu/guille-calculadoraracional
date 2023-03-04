<?php

class Racional {
    private $numerador;
    private $denominador;


    /*
    const ERROR = 0;
    const RACIONAL = 1;

    static public function validar_racional ($cadena):int {
        $racional="^[0-9]+\/[1-9][0-9]*";
        if (preg_match(pattern: "#$racional#", $cadena)) {
            return Racional::RACIONAL;
        } else {
            return Racional::ERROR;
        }
    }
    */
    
    public function __construct(int|string $num1 = 1, int $num2 = 1) {

        if (is_string($num1)) {
            $parts = explode('/', $num1);
            
            // Asigna los valores del array a las propiedades de la clase
            $this->numerador = intval($parts[0]);
            $this->denominador = intval($parts[1]);
        } else {
            $this->numerador = $num1;
            $this->denominador = $num2;
        }

        if ($this->denominador == 0) {
            $this->denominador = 1;
        }
    }


    public function sumar(Racional $r1) {
        $numerador = $this->numerador * $r1->denominador + $r1->numerador * $this->denominador;
        $denominador = $this->denominador * $r1->denominador;
        return new Racional($numerador, $denominador);
    }

    public function restar(Racional $r1) {
        $numerador = $this->numerador * $r1->denominador - $r1->numerador * $this->denominador;
        $denominador = $this->denominador * $r1->denominador;
        return new Racional($numerador, $denominador);
    }

    public function multiplicar(Racional $r1) {
        $numerador = $this->numerador * $r1->numerador;
        $denominador = $this->denominador * $r1->denominador;
        return new Racional($numerador, $denominador);
    }

    public function dividir(Racional $r1) {
        $numerador = $this->numerador * $r1->denominador;
        $denominador = $this->denominador * $r1->numerador;
        return new Racional("$numerador/$denominador");
    }
    
    public function __toString() {
        if ($this->denominador==1) {
            return "{$this->numerador}";
        } else {
            return "{$this->numerador}/{$this->denominador}";
        } 
    }


    public function simplificar() {
        $mcd= $this->mcd();
        return new Racional ( $this->numerador/$mcd,$this->denominador/$mcd);
    }
    private function mcd() {
        $resto=abs($this->numerador - $this->denominador);
        $num2=($this->numerador>$this->denominador)? $this->denominador: $this->numerador;
        while ($resto !==0) {
            $resto1 = abs ($resto - $num2);
            $num2 = min ($resto, $num2);
            $resto=$resto1;
        }
        return $num2;
    }
    
}
?>