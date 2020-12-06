<?php


class FlashMessage
{
    public function message($tipo, $mensagem)
    {
        switch ($tipo){
            case 'success':
                return flash
        }



        flash($mensagem)->$tipo();
    }

}