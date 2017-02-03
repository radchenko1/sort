<? 

class Model {
    
 public $goods = array( 
    'date'=>array('2016-10-02','2012-07-02','2006-10-02','2002-07-02','2016-10-02','2012-07-02','2006-10-02','2002-07-02','2015-11-15'),
    'cost'=>array(1917,116,1915,1107,1156,115,117,1150,11509),
    'name'=>array('айфон','пилосос','ноутбук','картридж','принтер','флешка','роутер','вимикач','смартфон')
            );
               
function sort_cost ($a, $b){
    return ($a['cost'] - $b['cost']);
}

function sort_date($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
        }
        

 function sort_name($a, $b)
{
    return strcmp($a["name"], $b["name"]);
}

}

?>

