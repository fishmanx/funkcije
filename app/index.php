<?php
include ('table.php');
include ('select.php');
$tabela = new table();
$properties=array('class'=>'mojaklasa','id'=>'mojid', 'name'=>'mojname', 'width'=>'100%', 'border'=>'2');
$headers = array('prva kolona', 'druga kolona' , 'treca kolona', 'cetvrta kolona' );
$data = array(['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4],['a'=>5,'b'=>6,'c'=>7,'d'=>8]);


$select = new select();
$sdata=array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
$sproperties= $arrayName = array('class'=>'mojaklasa','id'=>'mojid','title'=>'odaberi neku vrednost', 'selected'=>'d');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>funkcije</title>
  </head>
  <body>
<?php
  echo $tabela->create_table($headers,$data,$properties);
  echo $select->create_select($sdata,$sproperties);
?>
  </body>
</html>
