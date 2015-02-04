<?php
class ControllerHelper {
    public static function randomRow($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);       
        return array_slice($numbers, 0, $quantity);
    }
    
    public static function sendmail($to, $subject, $message) {                
        $headers = 'From: ' . $ADMIN_MAIL . "\r\n" .
            'Reply-To: ' . $ADMIN_MAIL . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }
    
    public static function userhash() {
        $tmp = "";
        for ($i=0; $i<10; $i++) {
            $tmp = $tmp . md5(uniqid(rand(), TRUE));
        }
        return $tmp;
    }

}
