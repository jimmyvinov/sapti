<?php
try {
  require('_start.php');
  global $PAISBOX;

  /** HEADER */
  $smarty->assign('title','Proyecto Final');
  $smarty->assign('description','Proyecto Final');
  $smarty->assign('keywords','Proyecto Final');

  //CSS
  $CSS[]  = "css/style.css";
  $smarty->assign('CSS','');

  //JS
  $JS[]  = "js/jquery.js";
  $smarty->assign('JS','');

  //CREAR UN TIPO   DE DEF
  /**
 leerClase('Defensa');
 $defensa        = new Defensa();
// $tipos->descripcion_tipodefensa = 'Es%';       
 $defensa_mysql  = $defensa->getAll();
 $defensa_id     = array();
 $defensa_nombre = array();
 while ($defensa_mysql && $row = mysql_fetch_array($defensa_mysql[0]))
 {
   $defensa_id[]     = $row['id'];
   $defensa_nombre[] = $row['nombre_tipodefensa'];
 }
$smarty->assign('cust_ids'  , $tipos_id);
$smarty->assign('cust_names', $tipos_nombre);
*/
//contruyendo el usuario
  
  /**
leerClase("Proyecto");
$proyecto= new Proyecto();
$proyecto_sql= $proyecto->getAll();
$proyecto_id= array();
$proyecto_nombre=array();
while ($proyecto_sql && $rows = mysql_fetch_array($proyecto_sql[0]))
 {
   $proyecto_id[]     = $rows['id'];
   $proyecto_nombre[] = $rows['nombre_proyecto'];
 }


$smarty->assign('proyecto_id',$proyecto_id);
$smarty->assign('proyecto_nombre',$proyecto_nombre);
  
  */  
  leerClase('Tribunal');
  
  $tribunal = new Tribunal();
  $smarty->assign("tribunal", $tribunal);
  
  if ( isset($_POST['tarea']) && $_POST['tarea'] == 'grabar' )
  {
    $tribunal->objBuidFromPost();
    $tribunal->save();
  }

  
  
  $smarty->assign("ERROR", $ERROR);
  

  //No hay ERROR
  $smarty->assign("ERROR",'');
  
} 
catch(Exception $e) 
{
  $smarty->assign("ERROR", handleError($e));
}

$TEMPLATE_TOSHOW = 'tribunal/registrotribunal.tpl';
$smarty->display($TEMPLATE_TOSHOW);

?>