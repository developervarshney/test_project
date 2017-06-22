<?php
    $to = 'developer.varshney@gmail.com';
    $subject = 'Test Email';
    $headers = "From: ravi.prakash@amvrin.com\r\n";
    $body = 'This is a test Email';
    
    if(@mail($to, $subject, $body, $headers)){
        echo "Success";
    }
    else{
        echo "Fail";
    }
?>