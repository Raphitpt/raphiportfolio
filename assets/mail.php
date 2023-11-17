<?php
if(isset($_POST)){

    $to = "rtiphonet@gmail.com";
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $headers = "From: ".$name." ".$firstname." <".$to.">\r\n";
    $headers .= "Reply-To: ".$to."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "<html><body>";
    $message .= "<h1 style='color:#f40;'>Hi ".$name." ".$firstname." " .$_POST['email']."</h1>";
    $message .= "<p style='color:#080;font-size:18px;'>".$message."</p>";
    $message .= "</body></html>";

    $send = mail($to, $subject, $message, $headers);
    
    if($send){
        echo '<center><h3 style="color:#080;">Mail sent successfully</h3></center>';
    }else{
        echo '<center><h3 style="color:#f40;">Mail could not be sent</h3></center>';
    }
}
