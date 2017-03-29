<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

if(!isset($_REQUEST['phone']) || !$_REQUEST['phone']){
    return;
};

$robokassa_redirect = false;
if (isset($_REQUEST['productprice']) && $_REQUEST['productprice']) {
    $tpl = dirname(__FILE__) . '/templates/order.php';
    $subject = 'Заявка на сертификат';
    $robokassa_redirect = true;
} else {
    $tpl = dirname(__FILE__) . '/templates/callback.php';
    $subject = 'Заявка на обратный звонок';
}

$pls = [
    'name' => $_REQUEST['name'] ? $_REQUEST['name'] : '',
    'phone' => $_REQUEST['phone'] ? $_REQUEST['phone'] : '',
    'email' => $_REQUEST['email'] ? $_REQUEST['email'] : '',
    'message' => $_REQUEST['comment'] ? $_REQUEST['comment'] : '',
    'name_to' => $_REQUEST['name_to_'] ? $_REQUEST['name_to_'] : '',
    'productname' => $_REQUEST['productname'] ? $_REQUEST['productname'] : '',
    'productprice' => $_REQUEST['productprice'] ? $_REQUEST['productprice'] : '',
    'url' => $_SERVER['HTTP_REFERER']
];

$message = include($tpl);

// $to      = 'float.w.studio@gmail.com,ffeechka@gmail.com,project.krivoshein@yandex.ru,info@floatstudio.ru';
$to      = 'murkovich.bogdan@gmail.com';
$header = "From: noreply@present.floatstudio.ru\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=utf-8\r\n";
$header.= "X-Priority: 1\r\n";

if (!mail($to, $subject, $message, $header)) {
    return;
}

if (!$robokassa_redirect) {
    $success_popup_from = true;
    return;
}
session_start();
$_SESSION['user'] = $pls;
$MrchLogin = 'floatstudio';
$MerchantPass1 = 'sQrWVJnct2dn6wQsrfSnp2Wj7Je7RJ';

$OutSum = $pls['productprice'];
$params = array(
    'MerchantLogin' => $MrchLogin,
    'InvoiceID' => 0,
    'OutSum' => $OutSum,
    'SignatureValue' => md5(implode(':', array($MrchLogin, $OutSum, 0, $MerchantPass1))),
    // 'SignatureValue' => md5(implode(':', array($MrchLogin, $OutSum, 0, $MerchantPass1)) . ':' . implode(':', $shpCustomParams)),
    'Description' => $pls['productname']
);

$url = 'https://auth.robokassa.ru/Merchant/Index.aspx?' . http_build_query($params);

header('Location: ' . $url);


