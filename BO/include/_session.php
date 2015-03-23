<?php
// Début de la session
  if ($_POST[session_name()]) {
    session_id($_POST[session_name()]);
  }
	if ($_GET[session_name()]) {
    session_id($_GET[session_name()]);
  }
  session_start($PHPSESSID);
?>