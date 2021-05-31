<?php

$base='ontime';
$AdminPassword='OT2021Free';

if (file_exists('../'.$base."/OnTime.php")){
	$base = '../'.$base;
}	
include_once($base."/OnTime.php");

class html extends OnTime {
	private $page    ='none';	
	private $headfix =array();	
	private $headmeta =array();	
	private $headlink =array();	
	private $headletter =array();	
	private $headcss =array();	
	private $BodyText =array();	
	public $BodyTextS = '';	
	private $errortaxt ='';	

function SetPage($CurPage){
	$this->page = $CurPage;
	$this->headfix[0] = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';     
	$this->headfix[1] = '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
	$this->headfix[2] = '<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />';
	$this->headlink["font-awesome.min"] = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';    
}

function SetMeta($definition){
    $read = $this->ShwCntIn($definition,$this->page );
	$this->headmeta['icon'] = '<link rel="shortcut icon" href="'.$read['icon'].'" />';
	$this->headmeta['head'] = "<title id='Description'>".$read['head']."</title>";
	$this->headmeta['description'] = '<meta name="description" content="'.$read['description'].'" />';
	$this->headmeta['keyword'] = '<meta name="keywords" content="'.$read['keyword'].'" />';
	$this->headmeta['author'] = '<meta name="author" content="'.$read['author'].'" />';	
}

function SetGoogle($definition){
    $read = $this->ShwCntIn($definition,$this->page );
 	foreach ($read as $clave => $valor) { if ($valor=='google')
		$this->headletter[$clave] = "<link href='https://fonts.googleapis.com/css?family=".$clave."' rel='stylesheet'>";
	}
}     

function SetCss($definition){
    $read = $this->ShwTbl($definition,$this->page );
 	foreach ($read as $clave => $valor) { 
 		$make='';
	 	foreach ($valor as $prop => $value) {
	 		if ($prop!='Name'){
		 		if (substr($prop,0,2)!='%%'){
		 			if (array_key_exists ( '%%'.$prop , $valor )){
			 			$make .=  $prop.':'. $valor[ '%%'.$prop].';';
	 				} else {
		 				$make .=  $prop.':'. $value.';';	 				
	 				}
				}
			}
		}
		if  ($clave=='Body'){
			$this->headcss[$clave] = $clave.'{'. $make. '}';
		} else {
			$this->headcss[$clave] = '.'.$clave.'{'. $make. '}';				
		} 
	}
}

function SetLayOut($definition, $inner='none'){
    $read = $this->ShwTbl($definition,$this->page );
    if ($inner=='none') {$this->BodyTextS ='';}	
 	foreach ($read as $clave => $valor) {
 		if ($valor['recursive']==$inner){ 
			$this->BodyTextS .= '<div id="'.$valor['Name'].'" class="'.$valor['CssClass'].'">'.chr(10);
			if (isset($valor['Content'])){
				$this->SetLayOutContent($valor['Content'],$valor['Name']);
			}
			if (isset($valor['Container'])){
				$this->SetLayOut($valor['Container'],$valor['Name']);
			}
			
			$this->BodyTextS .= '</div>'.chr(10);		
		}
	}
}

function SetLayOutContent($definition, $inner='none'){
    $readc = $this->ShwTbl($definition,$this->page );
	foreach ($readc as $clavec => $valorc) {
 		if ($valorc['recursive']==$inner){ 
			if (isset($valorc['Fuction'])){ 
				$toeval='$temp1=$this->'.$valorc['Fuction'].'(';
 				$pri = 0;
	 			foreach ($valorc['Parameter'] as $Pdesc => $Ptype) {
					if ($pri!=0){
		 				$toeval .= ",";	 			
					}
					$pri=1;
	 				$toeval .= "'".$Pdesc."'";	 		
				}	 		
				$toeval .= ');';
				eval($toeval);
			 	foreach ($temp1 as $deploy => $data) {
	 				$toeval2='$temp2=$this->'.$valorc['Deploy'].'(array(';
			 		$pri = 0;
				 	foreach ($data as $Pdesc => $Ptype) {
						if ($pri!=0){
			 				$toeval2 .= ",";	 			
						}
						$pri=1;
	 					$toeval2 .= "'".$Pdesc."' => '".$Ptype."'";	 		
					}	 		
					$toeval2 .= '));';
 					eval($toeval2);
				}		 		
			} else {
				$toeval2='$temp2=$this->'.$valorc['Deploy'].";";
				eval($toeval2);				
			}
		}
	} 
}


function Getheader(){
	$string = '<head>';
	foreach ($this->headfix as $clave=>$valor) $string.=$valor.chr(10);
	foreach ($this->headmeta as $clave=>$valor) $string.=$valor.chr(10);
	foreach ($this->headfix as $clave=>$valor) $string.=$valor.chr(10);
	foreach ($this->headletter as $clave=>$valor) $string.=$valor.chr(10);
	$string .= '<style>'.chr(10);
	foreach ($this->headcss as $clave=>$valor) $string.=$valor.chr(10);		
	$string .= '</style>'.chr(10);     
	$string .= '</head>'.chr(10);
	echo $string;
}

function GetLayout(){
	$string = '<body>'.chr(10);
	$string .= $this->BodyTextS;
	$string .= '</body>'.chr(10);
	echo $string;
}


function aref($data){
	$line='<a';
	if ( isset( $data['title'] ) ) { $line .=  ' title="'.$data['title'].'"'; }
	if ( isset($data['href'] ) ) { $line .=  '  href="'.$data['href'] . '"' ; }
	$line .= '>';
	if ( isset($data['HtmlContent'] ) ) { $line.=  $data['HtmlContent'];}
	if ( isset( $data['Img'] ) ) {
		$line .= '<img ';
		if ( isset( $data['Img'] ) ) { $line .=  ' src="public/'.$data['Img'].'"'; }
		if ( isset($data['Name'] ) ) { $line .=  '  alt="'.$data['Name'] . '"' ; }
		if ( isset($data['%%height'] ) ) { $line .=  '  height="'.$data['%%height'] . '"' ; }
		$line .= '>';
	}		
	$line .='</a>';	
	$this->BodyTextS .= $line.chr(10);			
}

function image($data){
	$line='<img ';
	if ( isset( $data['Img'] ) ) { $line .=  ' src="public/'.$data['Img'].'"'; }
	if ( isset($data['Name'] ) ) { $line .=  '  alt="'.$data['Name'] . '"' ; }
	if ( isset($data['%%height'] ) ) { $line .=  '  height="'.$data['%%height'] . '"' ; }
		
	$line .= '>';
	$this->BodyTextS .= $line.chr(10);			
}

function text($data){
	$line = '';
	if ( isset( $data['Name'] ) ) { $line .= $data['Name'] ; }
	$this->BodyTextS .= $line.chr(10);			
}



function license($data){
	include_once('Classcommon.php');
	$license = new CCLicense(3,2,1);
	$this->BodyTextS .= '</br>'.'</br>'.$license->logo . '</br>'.$license->url;;		
}




}

?>			