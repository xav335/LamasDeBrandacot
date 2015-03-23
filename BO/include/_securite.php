<?php
//echo $_SESSION["authentification"];
if ((!isset($_SESSION["authentification"])) || ($_SESSION["authentification"]== "") || ($_SESSION["authentification"]==0))
{
?>
<script language="javascript">
	parent.location.href="index.php";
</script>	
<?
	//header("Location: index.php");
}

?>