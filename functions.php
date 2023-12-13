<?php 
    function checkMail ($user_mail){
        if($user_mail !== ""){   
            if ((str_contains($user_mail, '@')) && (str_contains($user_mail, '.'))) {
                $mail_stat = 'Mail inserita correttamente! Benvenuto';
            }else{
                $mail_stat = 'La Mail DEVE contenere una "@" e un "." per essere valida';
            }
        } else{
            $mail_stat = 'Hai lasciato il campo vuoto.... Inserisci la tua Mail';
        } 
        return $mail_stat;
    };


    function alertMsg ($mail_stat){
        if(str_contains($mail_stat, 'Benvenuto')){
            $class_alert = 'alert alert-success';
        }elseif(str_contains($mail_stat, '@')){
            $class_alert = 'alert alert-warning';
        } else{
            $class_alert = 'alert alert-danger';
        }
        return $class_alert;
    }
?>