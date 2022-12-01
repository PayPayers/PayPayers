Класс для работы с API автовыводов



Пример работы с классом:

``````
<?php
		require ('paypayersClass.php');
 $token = '48114a98f92e'; /// Токен API выводов
 $to = '347286423473246'; ///Яндекс кошелек на который производится выводов
 $amount = 10; /// Сумма вывода
        $paypayers = new PayPayersApi($token);
      $payment =  $paypayers -> moneyback(
            [
                'amount' => $amount,
                'to'=>$to,
                ]
            );
	    ?>
``````
