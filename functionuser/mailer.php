<?php
date_default_timezone_set('America/New_York');
require "PHPMailer/PHPMailerAutoload.php";
function smtpmailer($to, $from, $from_name, $subject, $body,$orderum)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'ssahilaagiwal@gmail.com';
    $mail->Password = 'ffawpldewfuljzgt';

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From="ssahilaagiwal@gmail.com";
    $mail->FromName=$from_name;
    $mail->Sender=$from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if(!$mail->Send())
    {
        return($mail->ErrorInfo);


    }
    else
    {
        header("Location: https://localhost/pennhalal/success.php?confirmation=$orderum");
    }
}
if(isset($_SESSION['discount'])){
    $discunt=$_SESSION['discount'];
}
else{
    $discunt=0;
}
$orderlist="";
$to   = $_POST['email'];
$from = 'ssahilaagiwal@gmail.com';
$name = 'Penn Halal';
$subj = "Thank you for your order ".$uname;
foreach ($_SESSION['cart'] as $key=>$values){
    $prdocutname=$values['name'];
    $prdocutprice=$values['price'];
    $prdocutquan=$values['quan'];
$orderlist=$orderlist."<tr class='item'>
					<td>$prdocutname</td>

					<td>$ $prdocutprice</td>
					<td>$prdocutquan</td>
				</tr>";
}
$msg = "<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title></title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class='invoice-box'>
			<table cellpadding='0' cellspacing='0'>
				<tr class='top'>
					<td colspan='2'>
						<table>
							<tr>
								<td class='title'>
									<img src='https://i.ibb.co/MN8L8jB/logo.png' style='width: 100%; max-width: 300px' />
								</td>

								<td>
									Order Number #: ".$orderum."<br />
									Date: ".date('Y/m/d H:i:s')."<br />
									Address: ".$adress."<br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				

			

				<tr class='heading'>
					<td>Item</td>
					<td>Price</td>
					<td>Quantity</td>
				</tr>".$orderlist."
				

				

				<tr class='total'>
					
                    <td>Discount: $".$discunt."</td>
				</tr>
				<tr class='total'>
					
                   
					<td>Total: $".$_SESSION['totalamount']."</td>
				</tr>
			</table>
		</div>
	</body>
</html>";



?>