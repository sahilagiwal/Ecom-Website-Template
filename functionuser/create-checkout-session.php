<?php
include ("../admin/functions/dbcon.php");
require('../stripe-php/init.php');
\Stripe\Stripe::setApiKey("sk_test_51KSIrbJZQccgy517jdEhkEic9JZGMT9xRqeex4lXYrXfzb9WlwXBX8Ymrm64jWLIVPDun6QcQJ9FUiUcgcNKXe1q00VHJx141e");
session_start();
if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);
    $amount=$_SESSION['totalamount']*100;
    $token=$_POST['stripeToken'];
    $orderum="PENNORD".rand(1,100000000000);
    $data=\Stripe\Charge::create(array(
        "amount"=>$amount,
        "currency"=>"usd",
        "description"=>$orderum,
        "source"=>$token,

    ));

    echo "<pre>";

    if($data['status']=="succeeded") {


        $uname = $_POST['fname'] . " " . $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['amain'] . " ," . $_POST['asecond'] . " " . $_POST['zip'] . " ," . $_POST['state'] . " ," . $_POST['country'];
        $ordernotes = $_POST['notes'];
        $amountf=$amount/100;
        $sql="INSERT into orders (customername,amount,stripetoken,orderid,address,email,phone,ordernotes,status) VALUES ('$uname','$amountf','$token','$orderum','$adress','$email','$phone','$ordernotes','In Progress')";
        if($db->query($sql)){
        foreach ($_SESSION['cart'] as $key=>$values){
            $proname=$values['name'];
            $proprice=$values['price'];
            $proimg=$values['image'];
            $proquan=$values['quan'];
            $sql2="INSERT into productfororder (name,image,price,quantity,orderid) VALUES ('$proname','$proimg','$proprice','$proquan','$orderum')";
            if($db->query($sql2)){

            }
            else{
                echo $db->error;
            }
        }
            include ("mailer.php");
            $error=smtpmailer($to,$from, $name ,$subj, $msg,$orderum);


        }
        else{
            echo $db->error;
        }
    }
}
?>