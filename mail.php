<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "name@gmail.com";                 
$mail->Password = "super_secret_password";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;  


//From email address and name
$mail->From = "from@webfreelancedesign.com";
$mail->FromName = "PrimeCapital";


$mail->addReplyTo("reply@webfreelancedesign.com", "Reply");

//Send HTML or Plain Text email
$mail->isHTML(true);

if(@$_REQUEST['type']=='f_contact'){

    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $subject=$_REQUEST['subject'];
    $BankName=$_REQUEST['BankName'];
    $Besttimetocall=$_REQUEST['Besttimetocall'];
    $comments=$_REQUEST['comments'];

    $mail->addAddress("$email", "$name");
    $mail->addAddress("raisdhaka@yahoo.com"); //Recipient name is optional
    
    //Address to which recipient will reply
    
    $mail->Subject = "Inquiry from site";
    $body = "bellow info from inquiry form";
    $body .= "<i>Name: </i> $name<br/>";
    $body .= "<i>email: </i> $email<br/>";
    $body .= "<i>phone: </i> $phone<br/>";
    $body .= "<i>subject: </i> $subject<br/>";
    $body .= "<i>BankName: </i> $BankName<br/>";
    $body .= "<i>Besttimetocall: </i> $Besttimetocall<br/>";
    $body .= "<i>comments: </i> $comments<br/>";
    $body .= "Auto generated email from site";
    $mail->Body =$body;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}
elseif(@$_REQUEST['type']=='freeQuote'){

    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $interest=$_REQUEST['interest'];
    $comments=$_REQUEST['comments'];

    $mail->addAddress("$email", "$name");
    $mail->addAddress("raisdhaka@yahoo.com"); //Recipient name is optional
    
    //Address to which recipient will reply
    
    $mail->Subject = "Free Quote request from site";
    $body = "bellow info from Free Quote request";
    $body .= "<i>Name: </i> $name<br/>";
    $body .= "<i>email: </i> $email<br/>";
    $body .= "<i>phone: </i> $phone<br/>";
    $body .= "<i>interest: </i> $interest<br/>";
    $body .= "<i>comments: </i> $comments<br/>";
    $body .= "Auto generated email from site";
    $mail->Body =$body;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}
elseif(@$_REQUEST['type']=='g_contact'){

    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    
    $message=$_REQUEST['message'];

    $mail->addAddress("$email", "$name");
    $mail->addAddress("raisdhaka@yahoo.com"); //Recipient name is optional
    
    //Address to which recipient will reply
    
    $mail->Subject = "Free Quote request from site";
    $body = "bellow info from Free Quote request";
    $body .= "<i>Name: </i> $name<br/>";
    $body .= "<i>email: </i> $email<br/>";
    $body .= "<i>phone: </i> $phone<br/>";
    $body .= "<i>message: </i> $message<br/>";
    $body .= "Auto generated email from site";
    $mail->Body =$body;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}
elseif(@$_REQUEST['type']=='applyNow'){

    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $province=$_REQUEST['province'];
    $postalcode=$_REQUEST['postalcode'];
    $email=$_REQUEST['email'];
    $dob=$_REQUEST['dob'];
    $sin=$_REQUEST['sin'];
    $pc=$_REQUEST['pc'];
    $cp=$_REQUEST['cp'];    
    $employer=$_REQUEST['employer'];
    $currentemployer=$_REQUEST['currentemployer'];
    $occupation=$_REQUEST['occupation'];
    $worknumber=$_REQUEST['worknumber'];
    $getpaid=$_REQUEST['getpaid'];
    $incomemonth=$_REQUEST['incomemonth'];
    $bankname=$_REQUEST['bankname'];
    $transitnumber=$_REQUEST['transitnumber'];
    $institutionnumbe=$_REQUEST['institutionnumbe'];
    $accountnumber=$_REQUEST['accountnumber'];
    $accountfrom=$_REQUEST['accountfrom'];
    $creditScore=$_REQUEST['creditScore'];
    $loanamount=$_REQUEST['loanamount'];
    $previousloan=$_REQUEST['previousloan'];

    $mail->addAddress("$email", "$fname");
    $mail->addAddress("raisdhaka@yahoo.com"); //Recipient name is optional
    
    //Address to which recipient will reply
    
    $mail->Subject = "Apply now from site";
    $body = "bellow info from Apply now";
    $body .="<i>fname:</i>$fname<br/>";
    $body .="<i>lname:</i>$lname<br/>";
    $body .="<i>address:</i>$address<br/>";
    $body .="<i>city:</i>$city<br/>";
    $body .="<i>province:</i>$province<br/>";
    $body .="<i>postalcode:</i>$postalcode<br/>";
    $body .="<i>email:</i>$email<br/>";
    $body .="<i>dob:</i>$dob<br/>";
    $body .="<i>sin:</i>$sin<br/>";
    $body .="<i>pc:</i>$pc<br/>";
    $body .="<i>cp:</i>$cp <br/>" ;
    $body .="<i>employer:</i>$employer<br/>";
    $body .="<i>currentemployer:</i>$currentemployer<br/>";
    $body .="<i>occupation:</i>$occupation<br/>";
    $body .="<i>worknumber:</i>$worknumber<br/>";
    $body .="<i>getpaid:</i>$getpaid<br/>";
    $body .="<i>incomemonth:</i>$incomemonth<br/>";
    $body .="<i>bankname:</i>$bankname<br/>";
    $body .="<i>transitnumber:</i>$transitnumber<br/>";
    $body .="<i>institutionnumbe:</i>$institutionnumbe<br/>";
    $body .="<i>accountnumber:</i>$accountnumber<br/>";
    $body .="<i>accountfrom:</i>$accountfrom<br/>";
    $body .="<i>creditScore:</i>$creditScore<br/>";
    $body .="<i>loanamount:</i>$loanamount<br/>";
    $body .="<i>previousloan:</i>$previousloan<br/>";

    $mail->Body =$body;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}
elseif(@$_REQUEST['type']=='creditCard'){

    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $province=$_REQUEST['province'];
    $postalcode=$_REQUEST['postalcode'];
    $email=$_REQUEST['email'];
    $dob=$_REQUEST['dob'];
    $sin=$_REQUEST['sin'];
    $pc=$_REQUEST['pc'];
    $cp=$_REQUEST['cp'];    
    $employer=$_REQUEST['employer'];
    $currentemployer=$_REQUEST['currentemployer'];
    $occupation=$_REQUEST['occupation'];
    $worknumber=$_REQUEST['worknumber'];
    $getpaid=$_REQUEST['getpaid'];
    $incomemonth=$_REQUEST['incomemonth'];
    $bankname=$_REQUEST['bankname'];
    $transitnumber=$_REQUEST['transitnumber'];
    $institutionnumbe=$_REQUEST['institutionnumbe'];
    $accountnumber=$_REQUEST['accountnumber'];
    $accountfrom=$_REQUEST['accountfrom'];
    $creditScore=$_REQUEST['creditScore'];
   
    $mail->addAddress("$email", "$fname");
    $mail->addAddress("raisdhaka@yahoo.com"); //Recipient name is optional
    
    //Address to which recipient will reply
    
    $mail->Subject = "Apply now from site";
    $body = "bellow info from Apply now";
    $body .="<i>fname:</i>$fname<br/>";
    $body .="<i>lname:</i>$lname<br/>";
    $body .="<i>address:</i>$address<br/>";
    $body .="<i>city:</i>$city<br/>";
    $body .="<i>province:</i>$province<br/>";
    $body .="<i>postalcode:</i>$postalcode<br/>";
    $body .="<i>email:</i>$email<br/>";
    $body .="<i>dob:</i>$dob<br/>";
    $body .="<i>sin:</i>$sin<br/>";
    $body .="<i>pc:</i>$pc<br/>";
    $body .="<i>cp:</i>$cp <br/>" ;
    $body .="<i>employer:</i>$employer<br/>";
    $body .="<i>currentemployer:</i>$currentemployer<br/>";
    $body .="<i>occupation:</i>$occupation<br/>";
    $body .="<i>worknumber:</i>$worknumber<br/>";
    $body .="<i>getpaid:</i>$getpaid<br/>";
    $body .="<i>incomemonth:</i>$incomemonth<br/>";
    $body .="<i>bankname:</i>$bankname<br/>";
    $body .="<i>transitnumber:</i>$transitnumber<br/>";
    $body .="<i>institutionnumbe:</i>$institutionnumbe<br/>";
    $body .="<i>accountnumber:</i>$accountnumber<br/>";
    $body .="<i>accountfrom:</i>$accountfrom<br/>";
    $body .="<i>creditScore:</i>$creditScore<br/>";
    $body .="<i>loanamount:</i>$loanamount<br/>";

    $mail->Body =$body;
    $mail->AltBody = "This is the plain text version of the email content";
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}







//To address and name