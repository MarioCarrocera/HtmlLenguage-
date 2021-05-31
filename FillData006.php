<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);


$base='ontime';
$AdminPassword='OT2021Free';

if (file_exists('../'.$base."/OnTime.php")){
	$base = '../'.$base;
}	
	
include_once($base."/OnTime.php");

$demo=new OnTime($base);

$base .= '/';

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');

$inside = 'page';

$table = 'MainCss';

$demo->UpsTblIn($table , 'HeaderFix', array('Name'=>'Allways in the top', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'),'top'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed' , 'overflow'=> 'hidden',  'background-color'=> 'marron') , $inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , 'HeaderFix a', array('Name'=>'Allways in the bottom each item inside', 'float'=>'right', 'display'=>'block', 'color'=>'beige', 'text-align'=>'center','text-decoration'=> 'none','font-size'=>array('SzNumber'=>'17','SzUnit'=>'px'), 'padding'=>array('1-Top'=>array('SzNumber'=>'14','SzUnit'=>'px'),'2-Lef'=>array('SzNumber'=>'16','SzUnit'=>'px'))) , $inside);
$demo->UpsTblIn($table , 'HeaderFix a:hover', array('Name'=>'Allways in the bottom each item inside when the mouse is over','color'=>'red', 'background-color'=>'green') , $inside);
$demo->ot_show($demo->errvalid);$demo->ot_show($demo->errvalid);


$demo->UpsTblIn($table , 'CCenterAuto', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto','font-size'=>array('SzNumber'=>'17','SzUnit'=>'px')) , $inside);
$demo->ot_show($demo->errvalid);



$table = 'Content';

$demo->UpsTblIn($table , '40000-500', array('Name'=>'down Nav Bar', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Lenguages'=>'S','main'=>'S'), 'Deploy'=> 'aref', 'recursive'=> 'FixHeader'),$inside);

$table = 'Layout';

$demo->UpsTblIn($table , '10000', array('Name'=>'FixHeader', 'CssClass'=> 'HeaderFix','Content'=>'Content',  'recursive'=> 'none'),$inside);


echo "********** <br> Changes to Cass record & data <br> ********** <br> <br>";


echo "********** <br> Defining Lenguage Record  <br> ********** <br> <br>";
$name = 'Lenguages';
$demo->CrtRcd($name,'Lenguages');
$demo->RcdAddIn($name,'KeyId', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'Img', array('FldEmp'=>TRUE,'FldVld'=>array('Name'=>'image', 'in'=>'public')));
$demo->RcdAddIn($name,'width', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'height', array('FldEmp'=>FALSE));
$demo->RcdAddIn($name,'href', array('FldEmp'=>FALSE),'GString'); 
$demo->RcdAddIn($name,'height', array('FldEmp'=>TRUE),'SizeCss');


echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";

$demo->AnnInAdd('Lenguages','t','main');

$demo->UpsTblIn('Lenguages' , 'En', array('Name'=>'English', 'Img'=> 'EEUU.png', 'href'=> 'HtmlPage.php?leng=En', 'height'=> array('SzNumber'=>'20')),'main');
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn('Lenguages' , 'Es', array('Name'=>'Español', 'Img'=> 'España.png', 'href'=> 'HtmlPage.php?leng=Es', 'height'=> array('SzNumber'=>'20')),'main');
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn('Lenguages' , 'Mx', array('Name'=>'Español (México)', 'Img'=> 'México.png', 'href'=> 'HtmlPage.php?leng=Mx', 'height'=> array('SzNumber'=>'20')),'main');
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn('Lenguages' , 'none', array('Name'=>'On Time', 'Img'=> 'ontime.png', 'href'=> 'HtmlPage.php?leng=none', 'height'=> array('SzNumber'=>'20')),'main');
$demo->ot_show($demo->errvalid);


$table = 'Msg';

$demo->LngWrt('Es');
$demo->UpsTblIn($table , 'PageHeader', array('Name'=>'Cabecera de la pagina'),$inside);
$demo->LngWrt('Mx');
$demo->UpsTblIn($table , 'PageHeader', array('Name'=>'Encabezado de Pagina'),$inside);
$demo->LngWrt('En');
$demo->UpsTblIn($table , 'PageHeader', array('Name'=>'The Header in the page'),$inside);
$demo->LngWrt('none');



echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>