<?php

$inside = 'page';


echo "********** <br> Soport files for pagw  <br> ********** <br> <br>";
echo "********** <br> Creatinf data for html meta tags <br> ********** <br> <br>";
$demo->CrtFtrBsc($inside);
$table='screen';
$demo->CrtBscIn($table,'Related data on screen',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('icon','otfavicon.ico',$table, $inside);
$demo->UpnCntIn('head','On Time',$table, $inside);
$demo->UpnCntIn('description','Mundos Genesys, content manger',$table, $inside);
$demo->UpnCntIn('keyword','cm,wiki,blog,pages,user,free, comertial',$table, $inside);
$demo->UpnCntIn('author','Mundos Genesys',$table, $inside);

echo "********** <br> Creating data for add gogle letter to html<br> ********** <br> <br>";
$table='letters';
$demo->CrtBscIn($table,'Leters to load',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('Oswald','google',$table, $inside);
$demo->UpnCntIn('Sofia','google',$table, $inside);
$demo->UpnCntIn('Wendy One','google',$table, $inside);
$demo->UpnCntIn('Srisakdi','google',$table, $inside);
$demo->UpnCntIn('Tangerine','www',$table, $inside);

echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";
$table='size';
$demo->CrtBscIn($table,'Letters size',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('shuge','35px',$table, $inside);
$demo->UpnCntIn('sbig','30px',$table, $inside);
$demo->UpnCntIn('sxl','25px',$table, $inside);
$demo->UpnCntIn('sl','20px',$table, $inside);
$demo->UpnCntIn('sm','15px',$table, $inside);
$demo->UpnCntIn('ss','12px',$table, $inside);
$demo->UpnCntIn('sxs','10px',$table, $inside);

$table='color';
$demo->CrtBscIn($table,'Colors',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('transparent','transparent','color', $inside);
$demo->UpnCntIn('black','black',$table, $inside);
$demo->UpnCntIn('red','red',$table, $inside);
$demo->UpnCntIn('brown','#534a14',$table, $inside);
$demo->UpnCntIn('cream','$fdffd4',$table, $inside);
$demo->UpnCntIn('green','#579835',$table, $inside);
$demo->UpnCntIn('dark browm','#8b4513',$table, $inside);
$demo->UpnCntIn('marron','#800000',$table, $inside);
$demo->UpnCntIn('yellow','#f2f234',$table, $inside);
$demo->UpnCntIn('beige','#deb887',$table, $inside);

$table='style';
$demo->CrtBscIn($table,'Letter Style',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('normal','normal',$table, $inside);
$demo->UpnCntIn('italic','italic',$table, $inside);
$demo->UpnCntIn('oblique','oblique',$table, $inside);

$table='variant';
$demo->CrtBscIn($table,'Letter variant',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('vnormal','vnormal',$table, $inside);
$demo->UpnCntIn('vsmall','vsmall',$table, $inside);
$demo->UpnCntIn('vblack','vblack',$table, $inside);

$table='weight';
$demo->CrtBscIn($table,'Letter weight',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('sublime','900',$table, $inside);
$demo->UpnCntIn('subhead','700',$table, $inside);
$demo->UpnCntIn('colhead','200',$table, $inside);
$demo->UpnCntIn('data','300',$table, $inside);
$demo->UpnCntIn('comment','100',$table, $inside);
$demo->UpnCntIn('menu','100',$table, $inside);

$table='myletters';
$demo->CrtBscIn($table,'My letters by Use',$inside);
$demo->AnnInAdd($table,'b',$inside);

$demo->UpnCntIn('Body','Oswald',$table, $inside);
$demo->UpnCntIn('Headers','Sofia',$table, $inside);
$demo->UpnCntIn('Error','Sofia',$table, $inside);
$demo->UpnCntIn('Windows','Tangerine',$table, $inside);
$demo->UpnCntIn('footer','Tangerine',$table, $inside);

$table='UPoss';
$demo->CrtBscIn($table,'Postions',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('static',"Elements render in order, as they appear in the document flow",$table, $inside);
$demo->UpnCntIn('absolute',"The element is positioned relative to its first positioned (not static) ancestor element",$table, $inside);
$demo->UpnCntIn('fixed',"The element is positioned relative to the browser window",$table, $inside);
$demo->UpnCntIn('relative',"The element is positioned relative to its normal position, so 'left:20px' adds 20 pixels to the element's LEFT position",$table, $inside);
$demo->UpnCntIn('sticky',"The element is positioned based on the user's scroll position A sticky element toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it 'sticks' in place (like position:fixed).",$table, $inside);

$table='USize';
$demo->CrtBscIn($table,'Size Units',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('cm',"centimeters",$table, $inside);
$demo->UpnCntIn('mm',"millimeters",$table, $inside);
$demo->UpnCntIn('in',"inches (1in = 96px = 2.54cm)",$table, $inside);
$demo->UpnCntIn('px',"pixels (1px = 1/96th of 1in)",$table, $inside);
$demo->UpnCntIn('pt',"points (1pt = 1/72 of 1in)",$table, $inside);
$demo->UpnCntIn('pc',"picas (1pc = 12 pt)",$table, $inside);
$demo->UpnCntIn('em',"Relative to the font-size of the element (2em means 2 times the size of the current font)",$table, $inside);
$demo->UpnCntIn('ex',"Relative to the x-height of the current font (rarely used)",$table, $inside);
$demo->UpnCntIn('ch',"Relative to the width of the '0' (zero)",$table, $inside);
$demo->UpnCntIn('rem',"Relative to font-size of the root element",$table, $inside);
$demo->UpnCntIn('vw',"Relative to 1% of the width of the viewport*",$table, $inside);
$demo->UpnCntIn('vh',"Relative to 1% of the height of the viewport*",$table, $inside);
$demo->UpnCntIn('vmin',"Relative to 1% of viewport's* smaller dimension",$table, $inside);
$demo->UpnCntIn('vmax',"Relative to 1% of viewport's* larger dimension",$table, $inside);
$demo->UpnCntIn('%',"Relative to the parent element",$table, $inside);
$demo->UpnCntIn('auto',"Automatic",$table, $inside);
$demo->UpnCntIn("0","Zero",$table, $inside);

$table='Cursor';
$demo->CrtBscIn($table,'Cursor ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('alias',"alias",$table, $inside);
$demo->UpnCntIn('all-scroll',"all-scroll",$table, $inside);
$demo->UpnCntIn('auto',"auto",$table, $inside);
$demo->UpnCntIn('cell',"cell",$table, $inside);
$demo->UpnCntIn('context-menu',"context-menu",$table, $inside);
$demo->UpnCntIn('col-resize',"col-resize",$table, $inside);
$demo->UpnCntIn('copy',"copy",$table, $inside);
$demo->UpnCntIn('crosshair',"crosshair",$table, $inside);
$demo->UpnCntIn('default',"default",$table, $inside);
$demo->UpnCntIn('e-resize',"e-resize",$table, $inside);
$demo->UpnCntIn('ew-resize',"ew-resize",$table, $inside);
$demo->UpnCntIn('grab',"grab",$table, $inside);
$demo->UpnCntIn('grabbing',"grabbing",$table, $inside);
$demo->UpnCntIn('help',"help",$table, $inside);
$demo->UpnCntIn('move',"move",$table, $inside);
$demo->UpnCntIn('n-resize',"n-resize",$table, $inside);
$demo->UpnCntIn('ne-resize',"ne-resize",$table, $inside);
$demo->UpnCntIn('nesw-resize',"nesw-resize",$table, $inside);
$demo->UpnCntIn('ns-resize',"ns-resize",$table, $inside);
$demo->UpnCntIn('nw-resize',"nw-resize",$table, $inside);
$demo->UpnCntIn('nwse-resize',"nwse-resize",$table, $inside);
$demo->UpnCntIn('no-drop',"no-drop",$table, $inside);
$demo->UpnCntIn('none',"none",$table, $inside);
$demo->UpnCntIn('not-allowed',"not-allowed",$table, $inside);
$demo->UpnCntIn('pointer',"pointer",$table, $inside);
$demo->UpnCntIn('progress',"progress",$table, $inside);
$demo->UpnCntIn('row-resize',"row-resize",$table, $inside);
$demo->UpnCntIn('s-resize',"s-resize",$table, $inside);
$demo->UpnCntIn('se-resize',"se-resize",$table, $inside);
$demo->UpnCntIn('sw-resize',"sw-resize",$table, $inside);
$demo->UpnCntIn('text',"text",$table, $inside);
$demo->UpnCntIn('w-resize',"w-resize",$table, $inside);
$demo->UpnCntIn('wait',"wait",$table, $inside);
$demo->UpnCntIn('zoom-in',"zoom-in",$table, $inside);
$demo->UpnCntIn('zoom-out',"zoom-out",$table, $inside);

$table='Border_Style ';
$demo->CrtBscIn($table,'Css Borders ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('dotted',"Defines a dotted border",$table, $inside);
$demo->UpnCntIn('dashed',"Defines a dashed border",$table, $inside);
$demo->UpnCntIn('solid',"Defines a solid border",$table, $inside);
$demo->UpnCntIn('double',"Defines a double border",$table, $inside);
$demo->UpnCntIn('groove',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $inside);
$demo->UpnCntIn('ridge',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $inside);
$demo->UpnCntIn('inset',"Defines a 3D inset border. The effect depends on the border-color value",$table, $inside);
$demo->UpnCntIn('outset',"Defines a 3D outset border. The effect depends on the border-color value",$table, $inside);
$demo->UpnCntIn('none',"Defines no border",$table, $inside);
$demo->UpnCntIn('hidden',"Defines a hidden border",$table, $inside);

$table='HAlign';
$demo->CrtBscIn($table,'Horizontal Aling ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('left',"Aligns the text to the left	",$table, $inside);
$demo->UpnCntIn('right',"Aligns the text to the right",$table, $inside);
$demo->UpnCntIn('center',"Centers the text",$table, $inside);
$demo->UpnCntIn('justify',"Stretches the lines so that each line has equal width (like in newspapers and magazines)",$table, $inside);

$table='DecoLine';
$demo->CrtBscIn($table,'Decoration line ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('overline',"overline",$table, $inside);
$demo->UpnCntIn('underline',"underline",$table, $inside);
$demo->UpnCntIn('line-through',"line-through",$table, $inside);
$demo->UpnCntIn('underline overline',"underline overline",$table, $inside);
$demo->UpnCntIn('none',"none",$table, $inside);

$table='Dispalyval';
$demo->CrtBscIn($table,'Options for display',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('inline',"Displays an element as an inline element (like <span>). Any height and width properties will have no effect",$table, $inside);
$demo->UpnCntIn('block',"Displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width",$table, $inside);
$demo->UpnCntIn('contents',"Makes the container disappear, making the child elements children of the element the next level up in the DOM",$table, $inside);
$demo->UpnCntIn('flex',"Displays an element as a block-level flex container",$table, $inside);
$demo->UpnCntIn('grid',"Displays an element as a block-level grid container",$table, $inside);
$demo->UpnCntIn('inline-block',"Displays an element as an inline-level block container. The element itself is formatted as an inline element, but you can apply height and width values",$table, $inside);
$demo->UpnCntIn('inline-flex',"Displays an element as an inline-level flex container",$table, $inside);
$demo->UpnCntIn('inline-grid',"Displays an element as an inline-level grid container",$table, $inside);
$demo->UpnCntIn('inline-table',"The element is displayed as an inline-level table",$table, $inside);
$demo->UpnCntIn('list-item',"Let the element behave like a <li> element",$table, $inside);
$demo->UpnCntIn('run-in',"Displays an element as either block or inline, depending on context",$table, $inside);
$demo->UpnCntIn('table',"Let the element behave like a <table> element",$table, $inside);
$demo->UpnCntIn('table-caption',"Let the element behave like a <caption> element",$table, $inside);
$demo->UpnCntIn('table-column-group',"Let the element behave like a <colgroup> element",$table, $inside);
$demo->UpnCntIn('table-header-group',"Let the element behave like a <thead> element",$table, $inside);
$demo->UpnCntIn('table-footer-group',"Let the element behave like a <tfoot> element",$table, $inside);
$demo->UpnCntIn('table-row-group',"Let the element behave like a <tbody> element",$table, $inside);
$demo->UpnCntIn('table-cell',"Let the element behave like a <td> element",$table, $inside);
$demo->UpnCntIn('table-column',"Let the element behave like a <col> element",$table, $inside);
$demo->UpnCntIn('table-row',"Let the element behave like a <tr> element",$table, $inside);
$demo->UpnCntIn('none',"The element is completely removed",$table, $inside);

$table='overflow';
$demo->CrtBscIn($table,'overflow values ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('visible',"Default. The overflow is not clipped. The content renders outside the element's box",$table, $inside);
$demo->UpnCntIn('hidden',"The overflow is clipped, and the rest of the content will be invisible",$table, $inside);
$demo->UpnCntIn('scroll',"The overflow is clipped, and a scrollbar is added to see the rest of the content",$table, $inside);
$demo->UpnCntIn('auto',"Similar to scroll, but it adds scrollbars only when necessary",$table, $inside);

$table='bgrepeat';
$demo->CrtBscIn($table,'Values of the background repeat ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('repeat',"The background image is repeated both vertically and horizontally.  The last image will be clipped if it does not fit. This is default",$table, $inside);
$demo->UpnCntIn('repeat-x',"The background image is repeated only horizontally",$table, $inside);
$demo->UpnCntIn('repeat-y',"The background image is repeated only vertically",$table, $inside);
$demo->UpnCntIn('no-repeat',"The background-image is not repeated. The image will only be shown once",$table, $inside);
$demo->UpnCntIn('space',"The background-image is repeated as much as possible without clipping. The first and last images are pinned to either side of the element, and whitespace is distributed evenly between the images",$table, $inside);
$demo->UpnCntIn('round',"The background-image is repeated and squished or stretched to fill the space (no gaps)",$table, $inside);

$table='bgsize';
$demo->CrtBscIn($table,'Values of the background size ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('auto',"Default value. The background image is displayed in its original size",$table, $inside);
$demo->UpnCntIn('cover',"Resize the background image to cover the entire container, even if it has to stretch the image or cut a little bit off one of the edges",$table, $inside);
$demo->UpnCntIn('contain',"Resize the background image to make sure the image is fully visible",$table, $inside);

$table='bgkind';
$demo->CrtBscIn($table,'Kind of bacground image',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('url',"The URL to the image. To specify more than one image, separate the URLs with a comma
",$table, $inside);
$demo->UpnCntIn('linear-gradient',"Sets a linear gradient as the background image. Define at least two colors (top to bottom)",$table, $inside);
$demo->UpnCntIn('radial-gradient',"Sets a radial gradient as the background image. Define at least two colors (center to edges)",$table, $inside);
$demo->UpnCntIn('repeating-linear-gradient',"Repeats a linear gradient",$table, $inside);
$demo->UpnCntIn('repeating-radial-gradient',"Repeats a radial gradient",$table, $inside);

$table='clear';
$demo->CrtBscIn($table,'Clear values ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('none',"Allows floating objects on both sides of the element. This is default",$table, $inside);
$demo->UpnCntIn('left',"No floating objects allowed on the left side of the element",$table, $inside);
$demo->UpnCntIn('right',"No floating objects allowed on the right side of the element",$table, $inside);
$demo->UpnCntIn('both',"No floating objects allowed on either the left or right side of the element",$table, $inside);






echo "********** <br> Campos para Css <br> ********** <br> <br>";

$demo->DddAddFld('SizeCss', array('FldTpe'=>'A','FldDsc'=>'Setup size of css','FldVld'=>array('Name'=>'subset_join', 'in'=>'Size')));
$demo->DddAddFld('ColorCss', array('FldTpe'=>'S','FldDsc'=>'Css Color of the element','FldVld'=>array('Name'=>'bringin','content'=>'color', 'in'=>'page')));
$demo->DddAddFld('Sides', array('FldTpe'=>'A','FldDsc'=>'Setup Sides of css','FldVld'=>array('Name'=>'subset_join_space', 'in'=>'SizeArround')));
$demo->DddAddFld('SzNumber', array('FldTpe'=>'S','FldDsc'=>'Css About the amount of the size'));
$demo->DddAddFld('SzUnit', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'USize', 'in'=>'page')));
$demo->DddAddFld('BorderStyleCss', array('FldTpe'=>'S','FldDsc'=>'Style of the Vorder','FldVld'=>array('Name'=>'lookin','
content'=>'Border_Style', 'in'=>'page')));
$demo->DddAddFld('font-family', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'bringin','content'=>'myletters', 'in'=>'page')));
$demo->DddAddFld('font-style', array('FldTpe'=>'S','FldDsc'=>'Css Font style','FldVld'=>array('Name'=>'bringin','content'=>'style', 'in'=>'page')));
$demo->DddAddFld('font-variant', array('FldTpe'=>'S','FldDsc'=>'Css Font variant','FldVld'=>array('Name'=>'bringin','content'=>'variant', 'in'=>'page')));
$demo->DddAddFld('font-weight', array('FldTpe'=>'S','FldDsc'=>'Css Font weight','FldVld'=>array('Name'=>'bringin','content'=>'weight', 'in'=>'page')));
$demo->DddAddFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'lookin','content'=>'UPoss', 'in'=>'page')));
$demo->DddAddFld('cursor', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Cursor', 'in'=>'page')));
$demo->DddAddFld('border-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'subset_sort', 'in'=>'Styles')));
$demo->DddAddFld('text-decoration-line', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->DddAddFld('text-decoration', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->DddAddFld('text-decoration-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoStyle', 'in'=>'page')));
$demo->DddAddFld('text-align', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'HAlign', 'in'=>'page')));
$demo->DddAddFld('display', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Dispalyval', 'in'=>'page')));
$demo->DddAddFld('float', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'in','content'=>array('left'=>1,'right'=>1,'none'=>1))));
$demo->DddAddFld('background-image', array('FldTpe'=>'S','FldDsc'=>'Css Bacground image'));
$demo->DddAddFld('overflow', array('FldTpe'=>'S','FldDsc'=>'Css overflow With of the element','FldVld'=>array('Name'=>'lookin','content'=>'overflow', 'in'=>'page')));
$demo->DddAddFld('background-size', array('FldTpe'=>'S','FldDsc'=>'Css Back Ground size','FldVld'=>array('Name'=>'bringin','content'=>'bgsize', 'in'=>'page')));
$demo->DddAddFld('background-repeat', array('FldTpe'=>'S','FldDsc'=>'Css Back Ground size','FldVld'=>array('Name'=>'bringin','content'=>'bgrepeat', 'in'=>'page')));


echo "********** <br> Campos para layout <br> ********** <br> <br>";

$demo->DddAddFld('Order', array('FldTpe'=>'K','FldDsc'=>'Order to Deploy'));
$demo->DddAddFld('CssClass', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'MainCss', 'in'=>'page')));
$demo->DddAddFld('Container', array('FldTpe'=>'S','FldDsc'=>'Inner Container Define','FldVld'=>array('Name'=>'isfrom','in'=>'page')));
$demo->DddAddFld('Content', array('FldTpe'=>'S','FldDsc'=>'Inner Content Define','FldVld'=>array('Name'=>'isfrom','in'=>'page')));
$demo->DddAddFld('Parameters', array('FldTpe'=>'I','FldDsc'=>'Parameters need'));
$demo->DddAddFld('Parameter', array('FldTpe'=>'A','FldDsc'=>'Parameters send'));
$demo->DddAddFld('Deploy', array('FldTpe'=>'S','FldDsc'=>'Deploy mode'));
$demo->DddAddFld('Fuction', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'Functions', 'in'=>'page')));
$demo->DddAddFld('recursive', array('FldTpe'=>'S','FldDsc'=>'Use this field to do filters'));


echo "********** <br> Sub Record Sizes <br> ********** <br> <br>";

$demo->CrtRcd('Size','Size & unit of an element');
$demo->RcdAddIn('Size','SzNumber', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Size','SzUnit', array('FldEmp'=>TRUE)); 

echo "********** <br> Sub Record Estilo de borde <br> ********** <br> <br>";

$demo->CrtRcd('Styles','Side Styles in Css propierties');
$demo->RcdAddIn('Styles','1-Top', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','2-Left', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','3-Bottom', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','4-Rigth', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','All', array('FldEmp'=>TRUE),'BorderStyleCss');

echo "********** <br> Sub Record Size arround <br> ********** <br> <br>";

$demo->CrtRcd('SizeArround','Side Styles arround object in Css propierties');
$demo->RcdAddIn('SizeArround','1-Top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','2-Lef', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','3-Bottom', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','4-Rigth', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','All', array('FldEmp'=>TRUE),'SizeCss');

echo "********** <br> Sub Record CssStyles <br> ********** <br> <br>";

$demo->CrtRcd('Css','Cascading Style Sheets Definition');
$demo->RcdAddIn('Css','KeyId', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Css','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Css','font-family', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-size', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','font-variant', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','font-weight', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','background-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','position', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','height', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','left', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','right', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','bottom', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','cursor', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','border-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','border-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','text-decoration-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','text-decoration-line', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-decoration', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-decoration-style', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','text-align', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','margin', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','border-radius', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','padding', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','max-width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','max-heigh', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','display', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','float', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','background', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','background-image', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','overflow', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Css','background-size', array('FldEmp'=>TRUE));

echo "********** <br> Functiona Record  <br> ********** <br> <br>";

$demo->CrtRcd('Functions','Html Layout');
$demo->RcdAddIn('Functions','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Functions','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Functions','Parameters', array('FldEmp'=>FALSE));

echo "********** <br> Layout Record  <br> ********** <br> <br>";

$demo->CrtRcd('Layout','Html Layout');
$demo->RcdAddIn('Layout','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Layout','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Layout','CssClass', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Layout','Container', array('FldEmp'=>TRUE)); 
$demo->RcdAddIn('Layout','Content', array('FldEmp'=>TRUE)); 
$demo->RcdAddIn('Layout','recursive', array('FldEmp'=>FALSE)); 

echo "********** <br> Content Record  <br> ********** <br> <br>";

$demo->CrtRcd('Content','Content of Html Layout');
$demo->RcdAddIn('Content','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Content','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Content','CssClass', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Content','Fuction', array('FldEmp'=>TRUE)); 
$demo->RcdAddIn('Content','Parameter', array('FldEmp'=>TRUE)); 
$demo->RcdAddIn('Content','Deploy', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Content','recursive', array('FldEmp'=>FALSE)); 




echo "********** <br> Menu Record  <br> ********** <br> <br>";

$demo->CrtRcd('Menu','Menu Data');
$demo->RcdAddIn('Menu','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Menu','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Menu','HtmlContent', array('FldEmp'=>FALSE),'GString'); 
$demo->RcdAddIn('Menu','title', array('FldEmp'=>TRUE),'GString'); 
$demo->RcdAddIn('Menu','href', array('FldEmp'=>FALSE),'GString'); 

echo "********** <br> Image Record  <br> ********** <br> <br>";

$demo->CrtRcd('Images','Html Layout');
$demo->RcdAddIn('Images','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Images','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Images','Img', array('FldEmp'=>TRUE,'FldVld'=>array('Name'=>'image', 'in'=>'public')));
$demo->RcdAddIn('Images','height', array('FldEmp'=>TRUE),'SizeCss');

echo "********** <br> Message Record  <br> ********** <br> <br>";

$demo->CrtRcd('Msg','Html Layout');
$demo->RcdAddIn('Msg','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Msg','Name', array('FldEmp'=>FALSE));




echo "********** <br> Css Data  <br> ********** <br> <br>";

$table = 'MainCss';
$demo->CrtFtrTbl($inside);
$demo->CrtTblIn($table, 'Main CSS sample file', 'Css' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>'12','SzUnit'=>'px')),$inside);
$demo->UpsTblIn($table , 'OutSideup', array('Name'=>'Before Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'), 'font-family'=> 'Windows','background-color'=>'transparent'),$inside);
$demo->UpsTblIn($table , 'Main', array('Name'=>'Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'block',  'font-family'=> 'Body','background-color'=>'transparent'),$inside);
$demo->UpsTblIn($table , 'OutSideDown', array('Name'=>'After Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'none', 'font-family'=> 'Windows','background-color'=>'transparent'),$inside);
$demo->UpsTblIn($table , 'HeaderFix', array('Name'=>'Allways in the upper', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'6','SzUnit'=>'vh'),'display'=>'block','top'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed',  'font-family'=> 'Windows','background-color'=>'transparent' ), $inside);
$demo->UpsTblIn($table , 'FooterFix', array('Name'=>'Allways in the bottom', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'),'bottom'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed' , 'overflow'=> 'hidden',  'background-color'=> 'marron') , $inside);
$demo->UpsTblIn($table , 'FooterFix a', array('Name'=>'Allways in the bottom each item inside', 'float'=>'left', 'display'=>'block', 'color'=>'beige', 'text-align'=>'center','text-decoration'=> 'none','font-size'=>array('SzNumber'=>'17','SzUnit'=>'px'), 'padding'=>array('1-Top'=>array('SzNumber'=>'14','SzUnit'=>'px'),'2-Lef'=>array('SzNumber'=>'16','SzUnit'=>'px'))) , $inside);
$demo->UpsTblIn($table , 'FooterFix a:hover', array('Name'=>'Allways in the bottom each item inside when the mouse is over','color'=>'red', 'background-color'=>'green') , $inside);



$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>'12','SzUnit'=>'px'), 'background-image'=>"url('bg.png')"),$inside);

$demo->UpsTblIn($table , 'HeaderFix', array('Name'=>'Allways in the top', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'),'Top'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed' , 'overflow'=> 'hidden',  'background-color'=> 'marron') , $inside);

$demo->UpsTblIn($table , 'Main', array('Name'=>'Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'block',  'font-family'=> 'Body','background-color'=>'transparent'),$inside);

$demo->UpsTblIn($table , 'TopInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'10','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'MiddleInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'80','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'BottomInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'10','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'Cleft', array('Name'=>'left column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CleftAuto', array('Name'=>'left column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'Cright', array('Name'=>'right column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'right', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CrightAuto', array('Name'=>'right column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'right', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'CCenter', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CCenterAuto', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'main:after', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);


echo "********** <br> Images Data  <br> ********** <br> <br>";

$table = 'Images';
$demo->CrtTblIn($table, 'Album of images', 'Images' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'OntimeLogo', array('Name'=>'The ontime logo', 'Img'=> 'ontimer.png', 'height'=> array('SzNumber'=>'100')),$inside);
$demo->ot_show($demo->errvalid);


echo "********** <br> functions Data  <br> ********** <br> <br>";


$table = 'Functions';
$demo->CrtTblIn($table, 'Funtions Defined', 'Functions' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'ShwTbl', array('Name'=>'Show Table', 'Parameters'=> 2),$inside);


echo "********** <br> menu Data  <br> ********** <br> <br>";

$table = 'Menu';
$demo->CrtTblIn($table, 'Sample Menu', 'Menu' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , '00010000', array('Name'=>'menu 1', 'HtmlContent'=> 'Español', 'title'=> 'Español', 'href'=> '#otespaniol'),$inside);
$demo->UpsTblIn($table , '00010010', array('Name'=>'menu 2', 'HtmlContent'=> 'phpclases', 'title'=> 'Author on phpclases', 'href'=> 'https://www.phpclasses.org/browse/author/1085910.html'),$inside);
$demo->UpsTblIn($table , '00010020', array('Name'=>'menu 3', 'HtmlContent'=> 'github', 'title'=> 'Author on phpclases', 'href'=> 'https://github.com/MarioCarrocera"'),$inside);
$demo->UpsTblIn($table , '00010030', array('Name'=>'menu 4', 'HtmlContent'=> 'Contact Author', 'title'=> 'Send Mail', 'href'=> 'mailto:mario.carrocera@hotmail.com'),$inside);

echo "********** <br> message Data  <br> ********** <br> <br>";

$table = 'Msg';
$demo->CrtTblIn($table, 'Massage stores', 'Msg' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'PageHeader', array('Name'=>'The page header'),$inside);
$demo->ot_show($demo->errvalid);


echo "********** <br> Changes to content record & data <br> ********** <br> <br>";


$table = 'Content';
$demo->CrtTblIn($table, 'Content', 'Content' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , '40000-100', array('Name'=>'down Nav Bar', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Menu'=>'S','page'=>'S'), 'Deploy'=> 'aref', 'recursive'=> 'FixFooter'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-200', array('Name'=>'License', 'Deploy'=> 'license(1)', 'recursive'=> 'Middle'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-300', array('Name'=>'Logo', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Images'=>'S','page'=>'S'), 'Deploy'=> 'image', 'recursive'=> 'LeftColum'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-400', array('Name'=>'Logo', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Msg'=>'S','page'=>'S'), 'Deploy'=> 'text', 'recursive'=> 'MidleColum'),$inside);
$demo->ot_show($demo->errvalid);


echo "********** <br> Changes to Layout  data <br> ********** <br> <br>";


$table = 'Layout';
$demo->CrtTblIn($table, 'Page Layout', 'Layout' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , '10000', array('Name'=>'FixHeader', 'CssClass'=> 'HeaderFix',  'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , '20000', array('Name'=>'FixFooter', 'CssClass'=> 'FooterFix','Content'=>'Content',  'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000', array('Name'=>'Main', 'CssClass'=> 'Main','Container'=>'Layout', 'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , '41000', array('Name'=>'Header', 'CssClass'=> 'TopInside','Container'=>'Layout',  'recursive'=> 'Main'),$inside);

$demo->UpsTblIn($table , '42000', array('Name'=>'Middle', 'CssClass'=> 'MiddleInside','Content'=>'Content',  'recursive'=> 'Main'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '33000', array('Name'=>'Footer', 'CssClass'=> 'BottomInside',  'recursive'=> 'Main'),$inside);
$demo->ot_show($demo->errvalid);


$demo->UpsTblIn($table , '42100', array('Name'=>'LeftColum', 'CssClass'=> 'CleftAuto','Content'=>'Content', 'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '42200', array('Name'=>'MidleColum', 'CssClass'=> 'CCenterAuto','Content'=>'Content', 'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '42300', array('Name'=>'RightColum', 'CssClass'=> 'CrightAuto',  'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);



echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>