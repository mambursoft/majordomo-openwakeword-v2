<?php
$dictionary=array(
'OPENWAKEWORD_ENDPOINT'=>'API endpoint',
'OPENWAKEWORD_METHOD'=>'HTTP method',
'OPENWAKEWORD_TOKEN'=>'Access token',
'OPENWAKEWORD_REGION'=>'Region / route',
'OPENWAKEWORD_TRACKING'=>'Tracking number',
'OPENWAKEWORD_PAYLOAD'=>'POST payload template',
'OPENWAKEWORD_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'OPENWAKEWORD_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}