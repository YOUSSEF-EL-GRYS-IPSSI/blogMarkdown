<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

# Include the Autoloader (see "Libraries" for install instructions)
/*require 'mailgun/Mailgun.php';
use Mailgun\Mailgun;*/
# Instantiate the client.
$tittre=$data->titre; 
$NomComplet=$data->NomComplet; 
$messages=$data->message; 
$mailclient=$data->mailclient; 

/*$mgClient =new Mailgun('77d6a5e063fa06f771245495ef27e0fe-09001d55-30b47749');
$domain ="sandbox32e0fe060bf443228fe8e64fbb31423d.mailgun.org";
# Make the call to the client.
$result=$mgClient->sendMessage($domain, array(
	'from'	=> '$NomComplet <flanord.nziengui@gmail.com>',
	'to'	=> 'Baz <$mailclient>',
	'subject' => '$titre',
	'text'	=> '$messages'
));*/

 /*********  ENVOI EMAIL PAR LA FONCTION  *******/
		                            $sujet = 'MonBlog';
		                            $message = '<!doctype html>
												       <html xmlns="http://www.w3.org/1999/xhtml">
												      <head>
													  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
													  <meta name="viewport" content="initial-scale=1.0" />
													  <meta name="format-detection" content="telephone=no" />
													  <title></title>
													  <style type="text/css">
													body {
														width: 100%;
														margin: 0;
														padding: 0;
														-webkit-font-smoothing: antialiased;
													}
													@media only screen and (max-width: 600px) {
														table[class="table-row"] {
															float: none !important;
															width: 98% !important;
															padding-left: 20px !important;
															padding-right: 20px !important;
														}
														table[class="table-row-fixed"] {
															float: none !important;
															width: 98% !important;
														}
														table[class="table-col"], table[class="table-col-border"] {
															float: none !important;
															width: 100% !important;
															padding-left: 0 !important;
															padding-right: 0 !important;
															table-layout: fixed;
														}
														td[class="table-col-td"] {
															width: 100% !important;
														}
														table[class="table-col-border"] + table[class="table-col-border"] {
															padding-top: 12px;
															margin-top: 12px;
															border-top: 1px solid #E8E8E8;
														}
														table[class="table-col"] + table[class="table-col"] {
															margin-top: 15px;
														}
														td[class="table-row-td"] {
															padding-left: 0 !important;
															padding-right: 0 !important;
														}
														table[class="navbar-row"] , td[class="navbar-row-td"] {
															width: 100% !important;
														}
														img {
															max-width: 100% !important;
															display: inline !important;
														}
														img[class="pull-right"] {
															float: right;
															margin-left: 11px;
															max-width: 125px !important;
															padding-bottom: 0 !important;
														}
														img[class="pull-left"] {
															float: left;
															margin-right: 11px;
															max-width: 125px !important;
															padding-bottom: 0 !important;
														}
														table[class="table-space"], table[class="header-row"] {
															float: none !important;
															width: 98% !important;
														}
														td[class="header-row-td"] {
															width: 100% !important;
														}
													}
													@media only screen and (max-width: 480px) {
														table[class="table-row"] {
															padding-left: 16px !important;
															padding-right: 16px !important;
														}
													}
													@media only screen and (max-width: 320px) {
														table[class="table-row"] {
															padding-left: 12px !important;
															padding-right: 12px !important;
														}
													}
													@media only screen and (max-width: 608px) {
														td[class="table-td-wrap"] {
															width: 100% !important;
														}
													}
												  </style>
												 </head>
												 <body style="font-family: Maiandra GD; font-size:13px; color: #444444; min-height: 200px;" bgcolor="#E4E6E9" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
												 <table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
												 <tr><td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
												<table><tr><td class="table-td-wrap" align="center" width="608"><div style="font-family: Maiandra GD; line-height: 32px; color: #444444; font-size: 13px;">

												</div>

												<table class="table-row" style="table-layout: auto; padding-right: 24px; padding-left: 24px; width: 600px; background-color: #3975bb;" bgcolor="#FFFFFF" width="600" cellspacing="0" cellpadding="0" border="0"><tbody><tr height="55px" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; height: 55px;">
												   <td class="table-row-td" style="height: 55px; padding-right: 16px; font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; vertical-align: middle;" valign="middle" align="left">
													 <a href="#" style="color: #ffffff; text-decoration: none; padding: 0px; font-size: 14px; line-height: 20px; height: 50px; background-color: transparent;">
													 Article
													 </a>
												   </td>
												 
												   <td class="table-row-td" style="height: 55px; font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; text-align: right; vertical-align: middle;" align="right" valign="middle">
													 <a href="#" style="color: #ffffff; text-decoration: none; font-size: 14px; background-color: transparent;">
													 MonBlog
													 </a>
													
												   </td>
												</tr>
												</tbody></table>


												<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table>
												<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>


												<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
												   <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
													 <table class="header-row" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="528" style="font-size: 14px; margin: 0px; font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #478fca; padding-bottom: 10px; padding-top: 15px;" valign="top" align="left">Bonjour  '.$NomComplet.' </td></tr></tbody></table>
													 <table class="header-row" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="528" style="font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #444444; margin: 0px; font-size: 14px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left"> </td></tr></tbody></table>
													 <table class="header-row" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="528" style="font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #444444; margin: 0px; font-size: 14px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left">'.$messages.'  </td></tr></tbody></table>
												   </td></tr></tbody></table>
												</td></tr></tbody></table>

													<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
												   <table class="table-col"  width="100%" style="table-layout: fixed;" cellspacing="0" cellpadding="0" border="0">
												   <tbody>
												   <tr>
												   <td class="table-col-td" width="100%" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
													<table class="header-row" width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="255" style="font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 8px; padding-top: 10px;" valign="top"></td></tr></tbody></table>
													
													<div style="font-family: Maiandra GD; color: #444444; font-size: 13px;">
													<br>
															   <br> <br>
															  
															
															<b><br><b><br>
															
															
															<br>
															
															<b><br>
															<b><b>
															
																<br>	<br>
																<br>	<br>
															<b>Cordialement:  <br>
															  Equipe </b><br>
															    
															</div>
												   </td></tr></tbody>
												   
												   
												   </table>
												</td></tr></tbody></table>

												<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
												<table class="table-space" height="24" style="height: 24px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="24" style="height: 24px; width: 600px; padding-left: 18px; padding-right: 18px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="center">&nbsp;<table bgcolor="#E8E8E8" height="0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td bgcolor="#E8E8E8" height="1" width="100%" style="height: 1px; font-size:0;" valign="top" align="left">&nbsp;</td></tr></tbody></table></td></tr></tbody></table>


												<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
												   
													<table class="table-col" align="left" width="160" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="255" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
													<table class="header-row" width="160" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="255" style="font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left"> CONTACTS :</td></tr></tbody></table>
														 <div style="font-family: Maiandra GD; line-height: 36px; color: #444444; font-size: 13px;">
														 <b> Téléphone : (+33)  </b><br>
														 <b> E-mail :  </b><br>
														</div>
												   </td>
												</tr></tbody></table>
												   <table class="table-col" align="left" width="273" style="padding-right: 12px; table-layout: fixed;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-col-td" width="160" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
													<table class="header-row" width="255" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="160" style="font-family: Maiandra GD; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 14px; padding-bottom: 8px; padding-top: 10px;" valign="top" align="left"> TROUVEZ-NOUS SUR :</td></tr></tbody></table>
													
													<div style="font-family: Maiandra GD; line-height: 36px; color: #444444; font-size: 12px;">
														
														<a href="#" style="color: #6688a6; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; border-width: 1px 1px 2px; border-style: solid; border-color: #8aafce; padding: 6px 12px; font-size: 14px; line-height: 20px; background-color: #ffffff;">Facebook</a>
														
													</div>
												   </td></tr></tbody></table>
												   
													   
												</td></tr></tbody></table>

												<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 600px; background-color: #ffffff;" width="600" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>


												<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table>
												<table class="table-row" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
												 <table class="table-col" align="left" width="528" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="528" style="font-family: Maiandra GD; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
													 <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
													 <div style="font-family: Maiandra GD; line-height: 19px; color: #777777; font-size: 14px; ">AVIS: Ce courriel est confidentiel et peut être l objet de secret professionnel. Tout usage ou diffusion de celui-ci par une personne autre que son destinataire est illégal. Si vous recevez ce courriel par erreur, veuillez nous en aviser sans délai.</div>
													 <table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
													 <div style="font-family: Maiandra GD; line-height: 19px; color: #bbbbbb; font-size: 13px; text-align: center;">
														<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Contact</a>
														&nbsp;|&nbsp;
														<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">FAQ</a>
														&nbsp;|&nbsp;
														<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">Comment ?marche </a>
													 </div>
													 <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 528px; background-color: #ffffff;" width="528" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
												 </td></tr></tbody></table>
												</td></tr></tbody></table>
												<table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 600px; background-color: #e4e6e9;" width="600" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table></td></tr></table>
												</td></tr>
												 </table>
												 </body>
												 </html>';
										 
									

													$destinataire=$mailclient;
													$headers = "From: \"MonBlog\"<elgrysyoussef78@gmail.com>\n";
													$headers .= "Reply-To: elgrysyoussef78@gmail.com\n";
													$headers .= "Content-Type: text/html; charset=\"utf-8\"";
													
												   if(mail($destinataire,$sujet,$message,$headers)){
														// set response code - 201 created
														http_response_code(201);
												 
														// tell the user
														echo json_encode(array("message" => "message envoyé."));
													}
												 
													// if unable to create the articles, tell the user
													else{
												 
														// set response code - 503 service unavailable
														http_response_code(503);
												 
														// tell the user
														echo json_encode(array("message" => "Messane non envoyé."));
													}


?>
