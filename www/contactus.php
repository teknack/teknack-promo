<?php
//contact us
if(isset($_POST['contact'])){
    if(isset($_POST['cname']) && !empty($_POST['cname'])
        && isset($_POST['cemail']) && !empty($_POST['cemail'])
        && isset($_POST['ctelnum']) && !empty($_POST['ctelnum'])
        && isset($_POST['ccolnm']) && !empty($_POST['ccolnm'])
        && isset($_POST['cmessage']) && !empty($_POST['cmessage'])
    ){
        $cname=mysql_real_escape_string($_POST['cname']);
        $cemail=mysql_real_escape_string($_POST['cemail']);
        $ctelnum=mysql_real_escape_string($_POST['ctelnum']);
        $ccolnm=mysql_real_escape_string($_POST['ccolnm']);
        $cmessage=mysql_real_escape_string($_POST['cmessage']);


        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $temp_email = test_input($cemail);
        if (!filter_var($temp_email, FILTER_VALIDATE_EMAIL)) {
            echo '<div id="dialog" title="alert"><script>alert("Invalid Email format");</script></div>';
            return;
            die();
        }

        // $temp_telnum = $ptelnum;
        // if(!preg_match('/^\d{10}$/',$temp_telnum)) {
        //     echo '<div id="dialog" title="alert"><script>alert("Please Enter a 10 digit Mobile Number");</script></div>';
        //     return; 
        //     die();
        // }

        $to = "acm.teknack@gmail.com";
        $subject = "FEEDBACK FROM ".$cname;

        $msg="Name : ".$cname."\n"."Mobile Number : ".$ctelnum."\n"."Email ID : ".$cemail."\n"."College : ".$ccolnm."\n"."Feedback : ".$cmessage;
        $msg = wordwrap($msg,70);
        mail($to,$subject,$msg,'From: <webmaster@teknack.in>');

        echo '<div id="dialog" title="alert"><script>alert("Thank you for dropping us a line.\nWe will get back to you shortly.");</script></div>';
    }
}

?>