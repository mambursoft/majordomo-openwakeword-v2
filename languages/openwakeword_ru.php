<?php
$dictionary=array(
'OPENWAKEWORD_ENDPOINT'=>'Адрес API',
'OPENWAKEWORD_METHOD'=>'HTTP-метод',
'OPENWAKEWORD_TOKEN'=>'Токен доступа',
'OPENWAKEWORD_REGION'=>'Регион / маршрут',
'OPENWAKEWORD_TRACKING'=>'Номер отправления',
'OPENWAKEWORD_PAYLOAD'=>'Шаблон POST-запроса',
'OPENWAKEWORD_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'OPENWAKEWORD_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}