<?php 
    function checkMail ($user_mail){
        if($user_mail !== ""){   
            if ((str_contains($user_mail, '@')) && (str_contains($user_mail, '.'))) {
                return $mail_ok = 'ok';
            }else{
                return 'la mail deve contenere una @ e un .';
            }
        } else{
            return 'campo vuoto';
        } 
    }

?>