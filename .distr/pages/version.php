<?php

$unit ='synergy';
$type = 'academy';
$land = 'python_elementary';
$graccount = '';
$grcampaign = '';
$title = 'Python Elementary';
$description = 'Teach your children to program and distract them from games and YouTube';

$btn = 'Submit your application';
$date = '';
$format = '';

$phone1 = '';
$phone_link1 = '';
$phone2 = '';
$phone_link2 = '';

$mail = 'help@synergyacademy.com';
$lang = 'en';

$link = 'https://synergyacademy.com/lp/python/thanks/';
$quote_id = '';
$GTM_ID = 'GTM-WPPNHZD';
$Facebook_ID = '';

/* письма/рассылка */
$es_list_id = '';
$es_message_id = '';

/* оплата(formblock/block) */
$linkPay =  'https://secure.telr.com/gateway/ql/SYNERGYADVISORYFACILITY_381172.html';

switch ($version) {
    case '':
    break;
}

$action = implode(array(
    'https://syn.su/lander.php?r=land/index',
    '&land='.$land,
    '&unit='.$unit,
    '&type='.$type,
    '&version='.$version,
    '&partner='.$partner,
    '&graccount='.$graccount,
    '&grcampaign='.$grcampaign,
    '&quote_id='.$quote_id,
    '&link='.$link,
    '&es_list_id=', $es_list_id,
    '&es_message_id=', $es_message_id,
    '&ignore-thanksall=1'
));