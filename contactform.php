<?php
 if(isset($_POST['submit'])){
   $forename = $_POST['forename'];
   $surname = $_POST['surname'];
   $date = $_POST['date'];
   $number = $_POST['number'];
   $email = $_POST['email'];

   $emailTo = "leedsth-tr.Webteam@nhs.net";
   $header = "From: " .$_email;
   $txt = "You have recived an email from " $_surname. ".\n\n";

   mail($email, $forename, $date, $number,  $header, $txt);
   header("Location: index.php?mailsend")
 }
