<?php

if (isset($_POST['submit'])) {
  $mailFrom = $_POST['mail'];
  $feedback = $_POST['feedback'];

  $mailTo = "gjaenchen@unibz.it"
  $headers = "From: ".$mailFrom;
  $txt = "New Input from" .$mailFrom.".\n\n".$feedback;

  mail($mailTo, $feedback, $txt, $headers);
  header("Location: index.php?mailsent");
}
