<?php
//
//
//use Plasticbrain\FlashMessages\FlashMessages;
//
//class MessageFlash
//{
//    private FlashMessages $flashMessage;
//
//    public function __construct()
//    {
//        $this->flashMessage = new FlashMessages();
//    }
//
//    public function message($tipo, $message): object|bool
//    {
//        switch ($tipo) {
//            case 'info':
//                return $this->flashMessage->info($message);
//            case 'success':
//                return $this->flashMessage->success($message);
//            case 'warning':
//                return $this->flashMessage->warning($message);
//            case 'error':
//                return $this->flashMessage->error($message);
//            default:
//                return $this->flashMessage->error('Erro inesperado');
//        }
//    }
//
//}