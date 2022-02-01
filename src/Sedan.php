<?php 

class Sedan implements Vehicule 
{
    public function getTipo(): int 
    {
        return 1;
    }

    public function getLlantas(): int 
    {
        return 4;
    }
}
