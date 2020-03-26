<?php
$arr = ['cms'=>['joomla','wordpress','drupal'],
        'colors'=>['blue'=>'голубой','red'=>'красный','green'=>'зелёный'],];
        echo $arr ['cms'][0] . ',' . $arr ['cms'][2] . ',' ;
        echo $arr ['colors']['green'] . ',' . $arr ['colors']['red']; 
        
        echo '<hr>';

   $week = ['ru'=>['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'],
            'en'=>['monday','tuesday','wednesday','thursday','friday','saturday','sunday'],];
            echo $week ['ru'][0] . ',' ; 
            echo $week ['en'][2]  ;

            echo '<hr>';
            
        $lang ='ru';
        $day = '3';
        switch($lang){
        case 'ru' :   
        echo 'сре';
        break;}
       switch ($day){
        case '3' :   
         echo 'да';
         break;}
?>