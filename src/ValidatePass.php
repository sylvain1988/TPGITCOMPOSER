<?php

class ValidatePass {
    const MINLGT = 6;
    const MAXLGT = 10;
    public function ValidLength ($pass)
    {
        $passlength = strlen($pass);
        if ($passlength>= self::MINLGT && $passlength <= self::MAXLGT)
        {
            return true;
        }
        else 
        {
            return false;
        }
        
    }
}
