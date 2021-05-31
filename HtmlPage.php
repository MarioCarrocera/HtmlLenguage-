<?php
//ini_set('display_errors', true);
//error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

function clean_input($data){$data=trim($data);$data=stripslashes($data);$data=htmlspecialchars($data);return $data;}
session_name ('mg');
session_start();
if ( ! isset ($_SESSION["iniciada"]) ) {
		$_SESSION["iniciada"] = 'Yes';
		$_SESSION['leng'] = 'none';
		session_write_close();	
		session_start();
} 

if($_SERVER["REQUEST_METHOD"]=="GET"){ if(isset($_GET["leng"])) {
	$_SESSION['leng']=clean_input($_GET["leng"]);}}
if($_SERVER["REQUEST_METHOD"]=="POST"){if(isset($_POST["leng"])){
	$_SESSION['leng'] = clean_input($_POST["forma"]);}}



include_once('HtmlClass.php');
$html = new html();
$aread$html->LngRad($_SESSION['leng']);
$html->SetPage('page');
$html->SetMeta('screen');
$html->SetGoogle('letters');
$html->SetCss('MainCss');
$html->SetLayOut('Layout');
?>

<!DOCTYPE html>
<html>
	<?php $html->Getheader();
		  $html->GetLayout();?> 
</html>
