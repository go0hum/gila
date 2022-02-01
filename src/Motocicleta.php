<?php 

class Motocicleta implements Vehicule 
{
    public function getTipo(): int 
    {
        return 2;
    }

    public function getLlantas(): int 
    {
        return 2;
    }
}