<?php
        $title = 'from '.substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'novikovaolgavit@mail.ru'; 
        // $from - от кого 
        $from='test@test.ru'; 
        // функция, которая отправляет наше письмо. 
        mail($to, $title, $mess, 'From: '.substr(htmlspecialchars(trim($_POST['mail'])), 0, 1000)); 

?>