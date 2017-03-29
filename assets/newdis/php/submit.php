<?php
define('MODX_API_MODE', true);
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/index.php';
$modx->getService('error','error.modError');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

if(isset($_REQUEST['type']) && $_REQUEST['type']){
    $type = $_REQUEST['type'];
}else{return;}
if(!isset($_REQUEST['phone']) || !$_REQUEST['phone'] || $_REQUEST['lastname']){
    die(json_encode(array('success' => false, 'message'=>'Не все обязательные поля заполнены')));
}


$pls = array(
    'name' => $_REQUEST['name'] ? $_REQUEST['name'] : '',
    'phone' => $_REQUEST['phone'] ? $_REQUEST['phone'] : '',
    'email' => $_REQUEST['email'] ? $_REQUEST['email'] : '',
    'procedure' => $_REQUEST['procedure'] ? $_REQUEST['procedure'] : '',
    'message' => $_REQUEST['message'] ? $_REQUEST['message'] : '',
    'date' => $_REQUEST['date'] ? $_REQUEST['date'] : '',
    'tpl' => 'calc_email',
    'url' => $_SERVER['HTTP_REFERER']
);

switch ($type) {
    case "1":
        $pls['type'] = 'Заказ обратного звонка';
        break;
    case "2":
        $pls['type'] = 'Запись на процедуру';
        break;
    default:
        $pls['type'] = $type;
        break;
}
$message = $modx->getChunk($pls['tpl'], $pls);

 
$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->set(modMail::MAIL_BODY,$message);
$modx->mail->set(modMail::MAIL_FROM, $modx->getOption('emailsender'));
$modx->mail->set(modMail::MAIL_FROM_NAME,$pls['type']);
$modx->mail->set(modMail::MAIL_SUBJECT,$pls['type'].' ('.$modx->getOption('site_name').')');
$emails = explode(',',$modx->getOption('mail_to'));
$modx->mail->address('to', 'm.salnikov@tegami.ru');
//foreach($emails as $email) { //РАЗКОМЕНТИТЬ!!!
//    $modx->mail->address('to', $email);
//}
$modx->mail->setHTML(true);
if (!$modx->mail->send()) {
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
}
$modx->mail->reset();
die(json_encode(array('success'=>'true', 'message' => '<h2>Спасибо за заявку!</h2><p>Ваша заявка отправлена менеджеру, в ближайшее время мы с Вами свяжемся.</p>')));
