<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>

<script src="js/jquery-1.7.1.min.js"></script>

</head>

<body>
<div style=" float:center; width:100%">
  <? 
        include('Model.php');
        $obj=new Model;
  ?>
</div>

          <div style=" float:left; width:100%">
  <?  $goods_res  = array(); 
foreach($obj->goods as $k => $v) {

     foreach($v as $key => $val) { 
        $goods_res[$key][$k] = $val;
             }

} 
  

$funct="sort_name";//'sort_cost' 'sort_date'
  usort($goods_res, array($obj, $funct));
  
  $json = json_encode ($goods_res);
 
  ?><p><select>
          <option value="cost">спочатку дешевші</option>
          <option selected value="name">по алфавіту</option>
          <option value="date">спочатку нові</option>
        </select> Оберіть сортування</p>
   
   <div id="results">
     | Дата <span style='padding-right:40px;'> </span>    | Ціна  | Товар      <br/>
     <?
  foreach($goods_res as $k => $v) {

     foreach($v as $key => $val) { 
              echo ' | '.$val;//реалізовано без використання таблиць  
     }
    echo '<br />';
  } 
?></div>
   


</div>

</div>
</body>

<script>
$(document).ready(function() {
$('select').on('change', function(){
var mySel= $('select').val();
var myjson = <?=$json?>;
//console.log("mySel", mySel);
var data={
                  mySel:   mySel,
                  myjson: myjson
              };
$.ajax({
              type: 'POST',
              url: '/ajax.php',
              data:  data,
              success: function(data) {
                $('#results').html(data);
              }
              
              });

})
})
</script>

</html>




