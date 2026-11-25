<?php
$dictionary=array(
'OPENWAKEWORD_ENDPOINT'=>'Адреса API',
'OPENWAKEWORD_METHOD'=>'HTTP-метод',
'OPENWAKEWORD_TOKEN'=>'Токен доступу',
'OPENWAKEWORD_REGION'=>'Регіон / маршрут',
'OPENWAKEWORD_TRACKING'=>'Номер відправлення',
'OPENWAKEWORD_PAYLOAD'=>'Шаблон POST-запиту',
'OPENWAKEWORD_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'OPENWAKEWORD_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}