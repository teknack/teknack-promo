<?php
if(isset($_POST['register'])){
	if(isset($_POST['pname']) && !empty($_POST['pname'])
		&& isset($_POST['pemail']) && !empty($_POST['pemail'])
		&& isset($_POST['ptelnum']) && !empty($_POST['ptelnum'])
		&& isset($_POST['ptkcode']) && !empty($_POST['ptkcode'])
		&& isset($_POST['ppass']) && !empty($_POST['ppass'])
		&& isset($_POST['prepass']) && !empty($_POST['prepass'])
	){
		$pname=mysql_real_escape_string($_POST['pname']);
		$pemail=mysql_real_escape_string($_POST['pemail']);
		$ptelnum=mysql_real_escape_string($_POST['ptelnum']);
		$ptkcode=mysql_real_escape_string($_POST['ptkcode']);
		$ppass=mysql_real_escape_string($_POST['ppass']);
		$prepass=mysql_real_escape_string($_POST['prepass']);

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$temp_email = test_input($pemail);
		if (!filter_var($temp_email, FILTER_VALIDATE_EMAIL)) {
			echo '<div id="dialog" title="alert"><script>alert("Invalid Email format");</script></div>';
			return;
			die();
		}

		$temp_telnum = $ptelnum;
		if(!preg_match('/^\d{10}$/',$temp_telnum)) {
			echo '<div id="dialog" title="alert"><script>alert("Please Enter a 10 digit Mobile Number");</script></div>';
			return; 
			die();
		}


		if(strlen($ptkcode) != 8) {
			echo '<div id="dialog" title="alert"><script>alert("Invalid Code entered!");</script></div>';
			return;
			die();
		}


		if(strlen($ppass) < 6)	{
			echo '<div id="dialog" title="alert"><script>alert("Password entered is to short");</script></div>';
			return;
			die();
		}

		if($ppass == $prepass) {
			$res = mysql_query("SELECT * FROM random_num WHERE ran_num = '$ptkcode'");
			if(!mysql_num_rows($res)) {
				echo '<div id="dialog" title="alert"><script>alert("Invalid Teknack Code. \\nDon\'t have a Code? Contact Us to get one!");</script></div>';
				die('Could not get database: ' . mysql_error());
			} else {
				$val = 0;
				while($row = mysql_fetch_array($res)) {
					$val = $row['valid'];
				}
				if($val==0)	{
					$comp = mysql_query("UPDATE random_num SET valid='1' where ran_num='$ptkcode'");
					$comp1 = mysql_query("INSERT INTO registered (fname,emailid,pno,tcode,pswd) VALUES ('$pname','$pemail','$ptelnum','$ptkcode','$ppass')");

					if(! $comp || ! $comp1 ) {
						die('Could not enter data: Please contact us. ' . mysql_error());
					}
					echo '<div id="dialog" title="alert"><script>alert("Registration successful.");</script></div>';
					$to = $pemail;
					$subject="Teknack registrations details. Do-not-reply";
					$msg="You have been successfully registered for Tecknack 2015 with the following credentials 
					\n Email: ". $pemail."\n Password: ".$ppass."\nThe event goes live on 21st Feb through 22nd Feb 2015 
					\n Your registered Email ID should be used in case of any enquiries. 
					\n Please Visit us on www.teknack.in \n Facebook: www.facebook.com/Teknack 
					\n Support: acm.teknack@gmail.com \n \n Regards, \n Teknack Team";
					
					mail($to,$subject,$msg,'From: <do-not-reply@teknack.in>');
				} else {
					echo '<div id="dialog" title="alert"><script>alert("Code already used please check your email.");</script></div>';//"Invalid code please enter valid code";
				}
			}
		} else {
			echo '<div id="dialog" title="alert"><script>alert("password doesn\'t match.");</script></div>';
		}
	} else {
		echo '<div id="dialog" title="alert"><script>alert("Please complete all the fields");</script></div>';
	}
}	
?>
