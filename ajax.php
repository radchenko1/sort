<? 
include('Model.php');
        $obj=new Model;
$a= $_POST['myjson'];
$funct='sort_'.$_POST['mySel'];
//var_dump($POST);
usort($a, array($obj, $funct));
?>
| Дата <span style='padding-right:40px;'> </span>    | Ціна  | Товар 
     <br/>
     <?
foreach($a as $k => $v) {

     foreach($v as $key => $val) { 
              echo ' | '.$val;  
     }
echo '<br />';
} 
?>

