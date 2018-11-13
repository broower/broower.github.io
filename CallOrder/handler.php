<?php

session_start();

date_default_timezone_set('Europe/Minsk');

require_once("PHPMailerAutoload.php");


$Settings = (object) array(

    'fromName'    => 'form (at) siberfx . com ', // name of the mail sender
    'fromMail'    => 'form@siberfx.com', // as who we sending
    'Message'     => 'Website new order!', // title of mail
    'Charset'     => 'UTF-8', // charset for mail body
    'Altbody'     => 'Just a watermark for background', 

    //SMTP Bilgileri
    'smtpConfirm'      => true, // if this option is "true" mail type is isSmtp, if not isHtml
    'Smtphost'      => 'smtp.gmail.com',
    'Smtpuser'      => 'form@siberfx.com',
    'Smtppass'      => '14396oem',
    'Smtpauth'      => true,
    'Smtpsecure'    => 'ssl',
    'Smtpport'      => 465,
    'Smtpdebug'     => false, // true for debugging.
    // Mail configurations for sending also another receiver.
    'SmtpCCConfirm'    => false, // if this option is "true" it sends also copy to another sender.
    'SmtpCCname'    => 'copy mail',
    'SmtpCCmail'    => 'info@siberfx.com',
    'addReceiver'      => true
);

function maxSender($to, $toName, $Subject, $Message_TEXT, $Message_HTML,$Attachment=''){
global $Settings;

    $sbm = new PHPMailer(true);
    $Settings->smtpConfirm == true ? $sbm->IsSMTP() : $sbm->IsMail();
    try {
        if($Settings->smtpConfirm == true){
        $sbm->SMTPAuth = $Settings->Smtpauth;
        $sbm->SMTPSecure = $Settings->Smtpsecure;
        $sbm->Port     = $Settings->Smtpport;
        $sbm->Host     = $Settings->Smtphost;
        $sbm->Username = $Settings->Smtpuser;
        $sbm->Password = $Settings->Smtppass;
        $sbm->SMTPDebug= false;
        $sbm->do_debug = 0;
                }
        
        $sbm->CharSet  = $Settings->Charset;
        $sbm->From     = $Settings->fromMail;
        $sbm->FromName = $Settings->fromName;

        $sbm->AddAddress($to,$toName);
        if(!empty($Attachment))$sbm->AddAttachment($Attachment);

        if($Settings->SmtpCCConfirm == true) $sbm->AddCC($Settings->SmtpCCmail,$Settings->SmtpCCname);
                
        // echo $message;
        if($Settings->addReceiver == true){
            $receiverList = array(
                
                "info@siberfx.com" => "Selim GÖRMÜŞ",
                //"fatih@atlantikyazilim.com" => "Fatih",
            );
            
            foreach($receiverList as $email => $name){
                $sbm->AddBCC($email, $name);
            }   
        }
        $sbm->Subject  = $Subject;
        $sbm->AltBody  = $Settings->Altbody;
        $sbm->WordWrap = 80; // set word wrap
        $sbm->MsgHTML($Message_HTML);
        $sbm->IsHTML(true);
        $sbm->Send();
        $sbm->ClearAddresses();
        $sbm->ClearAttachments();
        $sbm->IsHTML(true);
        return true;
    } catch (phpmailerException $e) {
        return $e->errorMessage();
    }
}

// ----------------------------------------------------------------------------
    $formData = (object) array (
        'copyright' => $SbxLogo,
        'title'     => "Phpmailer System"

    );

$message_success    = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
$message_error      = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />';

//------------------------------------------------------------------------------

/* Message content as HTML rendering.... */

$html = '
<html dir="ltr">
    <head>
        <title>'.$formData->title.'</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <style type="text/css">
table {
  border-style:solid;
  border-width:1px;
  margin-left:auto; 
  margin-right:auto;
  border-spacing: 0;
  border-collapse: callopse;
}
th {
  font-family:Calibri, sans-serif;font-size:16px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;
}
tr:nth-child(odd) {
  background-color:#eeffce
}
tr:nth-child(even) {
  background-color:#f2f2f2
}

.sag { text-align:left; }
.sol { width:20%; text-align:right; text-align:right; margin-right:5px; color:#55566d; }

.sbxmailer  {
    border-color:#aaa;
    width:750px
}
.sbxmailer td{
    font-family:Trebuchet MS, sans-serif;
    font-size:16px;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:#f2eaea;
}

.sbxmailer .baslik{font-size:18px;background-color:#fff; color:#000}
.sbxmailer .alt{vertical-align:middle; text-align:center;background-color:#e9f1f1;}

    </style>

    </head>

<body>

<table class="sbxmailer">
  <tr> 
    <th class="baslik" colspan="2">
      '.$formData->title.'
      <br />
      '.date('d-m-Y').'
    </th>
  </tr>

  <tr>
    <td class="sol"> IP Address </td>
    <td class="sag"> '.$_SERVER['REMOTE_ADDR'].' </td>
  </tr>
  <tr>
    <td class="sol"> Time </td>
    <td class="sag"> '.date('H:i:s').' </td>
  </tr>


';

foreach ($_POST['zakaz'] as $key => $value) {

  $html .= '
  <tr>
    <td class="sol"> '.$key.' </td>
    <td class="sag"> '.htmlspecialchars($value).' </td>
  </tr>
';
}
$html .= '


  <tr>
    <td class="alt" colspan="2">

        SiberFx Creative Solutions<br />
        ==============================================================<br />
        Support +375(25) 5150806 / Mon - sun 10:00-18:30<br />
        ==============================================================


    </td>
  </tr>
</table>
</body>
</html>
';


$success = maxSender('ofis@siberfx.com', $Settings->fromName, $Settings->Message, $Message_TEXT = '', $html);

if(!$success){
    echo 'There was an error while sending e-mail..' . $sbm->errorMessage;
} else {
    echo '<div class="alert alert-success" role="alert"><strong>Thank you.. we received your e-mail, will contact you soon.</strong></div>';
}


