<?php
define('_JEXEC', 1);
define('JPATH_BASE', '../../');
require_once(JPATH_BASE . '/includes/defines.php');
require_once(JPATH_BASE . '/includes/framework.php');
require_once(JPATH_BASE . 'libraries/joomla/factory.php');

$config = JFactory::getConfig();
$mailer = JFactory::getMailer();

// get inputted user email
$userEmail = $_POST["email"];

// get admin mail and name from configuration and set sender info
$sender = array(
  $config->get('mailfrom'),
  $config->get('fromname')
);
$mailer->setSender($sender);

// add email recipients
$mailer->addRecipient($userEmail);

// set email text
$body = "Here is free preset from hechopresets.com!";
$mailer->setSubject('Free preset');
$mailer->setBody($body);

// Optional file attached
$mailer->addAttachment(JPATH_BASE . '/images/products/hecho_free_viewbug.zip');

// send email
$send = $mailer->Send();

// response to client
if ($send === true) {
  $response_array['success'] = true;
} else {
  $response_array['error'] = true;
}

header('Content-type: application/json');
echo json_encode($response_array);


/** Write user email into text file  **/
$file = JPATH_BASE . '/images/products/free-preset-receivers-viewbug.txt';
$email = $userEmail . "\n";
// Пишем содержимое в файл,
// используя флаг FILE_APPEND для дописывания содержимого в конец файла
// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
file_put_contents($file, $email, FILE_APPEND | LOCK_EX);


/** Send admin email **/
//$mailer->ClearAllRecipients(); // clear all receivers email
//$mailer->clearAttachments(); // clear all attachments
//
//$adminEmail = $config->get('mailfrom');
//
//// add email recipients
//$mailer->addRecipient($adminEmail);
//
//// set email text
//$body = "Free preset has been sent successfully to " . $userEmail;
//$mailer->setSubject('Free preset sent to ' . $userEmail);
//$mailer->setBody($body);
//
//// send email
//$send = $mailer->Send();