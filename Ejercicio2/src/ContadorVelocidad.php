<?php

namespace Ejercicio2;

class ContadorVelocidad
{
    public function getUmbral (int $velocidad)
    {
        if ($velocidad < 30){
            return "Muy lento";

        } elseif ($velocidad <= 60){
            return "Velocidad adecuada";

        } elseif ($velocidad <= 80){
            return "Exceso leve";

        } elseif ($velocidad <= 100){
            return "Exceso moderado";

        } else {
            return "Exceso grave";
        }
    }
}

?>